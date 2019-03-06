<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\OrderMeta;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Service;
use App\Models\Timing;
use App\Services\ShippingManager;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $cart;
    use ShippingManager;

    public function __construct(\Gloudemans\Shoppingcart\Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $cart = $this->cart->content();
        $coupon = session()->has('coupon') ? session('coupon') : null;
        return view('frontend.modules.cart.index', compact('cart', 'coupon'));
    }


    public function addService(Request $request)
    {
        // Note that Month/Day/Year that's the default
        $validator = validator($request->all(),
            [
                'service_id' => 'required|exists:services,id',
                'timing_id' => 'required|exists:timings,id',
                'user_id' => 'required|exists:users,id',
                'type' => 'required|alpha',
                'day_selected_format' => 'required|date_format:m/d/Y',
            ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        // Check all orders that may have metas with the same service and timing on the same date !!!
        $orderMetasWithSameService = OrderMeta::where(['service_id' => $request->service_id, 'timing_id' => $request->timing_id])->whereDate('service_date', '=', Carbon::parse($request->day_selected_format))->get();
        if ($orderMetasWithSameService->isEmpty()) {
            $service = Service::whereId($request->service_id)->first();
            $timing = Timing::whereId($request->timing_id)->first();
            return 'true metas are empty';
        } else {
            return redirect()->back()->with('error', trans('message.this_timing_is_not_already_booked_please_try_another_timing'));
        }

    }

    public function addItem(Request $request)
    {
        $validator = validator($request->all(),
            [
                'product_id' => 'required|exists:products,id',
                'color_id' => 'required|exists:colors,id',
                'size_id' => 'required|exists:sizes,id',
                'qty' => 'required|integer|min:1',
            ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $product = Product::whereId($request->product_id)->first();
        $productAttribute = ProductAttribute::where([
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'product_id' => $request->product_id
        ])->with('size', 'color')->first();

        if (!$this->checkStock($product, $productAttribute, request('qty'))) {
            return redirect()->back()->with('error', trans('general.maximum_qty_order_exceed_the_limit'));
        }

        if ($this->cart->count() > 0) {
            $element = $this->cart->content()->where('id', '=', $productAttribute->id)->first();
            if ($element) {
                if ($element->qty + $request->qty < $productAttribute->qty) {
                    $this->cart->add($productAttribute->id, $product->name, $request->qty, $product->finalPrice,
                        [
                            'size_id' => $productAttribute->size_id,
                            'color_id' => $productAttribute->color_id,
                            'sizeName' => $productAttribute->sizeName,
                            'colorName' => $productAttribute->colorName,
                            'product' => $product
                        ]
                    );
                    return redirect()->back()->with('success', trans('message.item_added_to_cart'));
                } else {
                    return redirect()->back()->with('error', trans('message.item_limit_exceed'));
                }
            } else {
                $this->cart->add($productAttribute->id, $product->name, $request->qty, $product->finalPrice,
                    [
                        'size_id' => $productAttribute->size_id,
                        'color_id' => $productAttribute->color_id,
                        'sizeName' => $productAttribute->sizeName,
                        'colorName' => $productAttribute->colorName,
                        'product' => $product
                    ]
                );
                return redirect()->back()->with('success', trans('message.item_added_to_cart'));
            }
        }
        $this->cart->add($productAttribute->id, $product->name, $request->qty, $product->finalPrice,
            [
                'size_id' => $productAttribute->size_id,
                'color_id' => $productAttribute->color_id,
                'sizeName' => $productAttribute->sizeName,
                'colorName' => $productAttribute->colorName,
                'product' => $product
            ]
        );
        return redirect()->back()->with('success', trans('message.item_added_to_cart'));
    }

    public function checkStock(Product $product, ProductAttribute $productAttribute, $qty)
    {
        if ($product->check_stock) {
            return $productAttribute->qty >= $qty ? true : false;
        }
        return true;
    }

    public function removeItem($id)
    {
        Cart::search(function ($item, $rowId) use ($id) {
            $item->id == $id ? Cart::remove($rowId) : null;
        });
        return redirect()->route('frontend.cart.index')->with('success', trans('message.item_removed'));
    }

    public function clearCart()
    {
        $this->cart->destroy();
        return redirect()->home()->with('success', trans('message.cart_destroyed'));
    }

    public function getCheckout()
    {
        return redirect()->route('frontend.cart.index');
    }

    public function postCheckout(Request $request)
    {
        $validate = validator($request->all(), [
            'grossTotal' => 'required|numeric',
            'grandTotal' => 'required|numeric',
            'package_id' => 'required|exists:shipment_packages,id',
            'charge' => 'required|numeric',
            'free_shipment' => 'required_with:branch',
            'branch' => 'exists:branches,id'
        ]);
        if ($validate->fails()) {
            return redirect()->route('frontend.cart.index')->withErrors($validate);
        }
        $cart = $this->cart->content();
        session()->put('shipment', $request->except('_token'));
        $shipment = session('shipment');
        return view('frontend.modules.checkout.index', compact('cart', 'shipment'));
    }

    public function applyCoupon(Request $request)
    {
        $validate = validator($request->request->all(), [
            'code' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with('error', trans('general.coupon_not_correct'));
        }

        $coupon = Coupon::active()->where(['code' => $request->code, 'consumed' => false])
            ->whereDate('due_date', '>=', Carbon::now())
            ->where('minimum_charge', '<=', $this->cart->subTotal())
            ->first();

        if ($coupon) {
            session()->put('coupon', $coupon);
            return redirect()->back()->with('success', trans('message.coupon_shall_be_applied'));
        } else {
            session()->forget('coupon');
            return redirect()->back()->with('error', trans('general.coupon_not_correct'));
        }

    }
}

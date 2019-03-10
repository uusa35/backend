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


    public function addServiceToCart(Request $request, Service $service)
    {
        // Check all orders that may have metas with the same service and timing on the same date !!!
        dd($service);
        if ($service->canBook(request('timing_id'),request('day_selected_format'))) {
            $element = $this->cart->content()->where('id', '=', $service->UId)->first();
            if ($element) {
                $this->cart->remove($element->rowId);
            }
            $this->cart->add($service->UId, $service->name, 1, $service->finalPrice,
                [
                    'type' => 'service',
                    'service_id' => $service->id,
                    'day_selected' => Carbon::parse($request->day_selected_format),
                    'timing_id' => $request->timing_id,
                    'notes' => $request->notes,
                    'service' => $service,
                    'company' => $service->user->name,
                    'timing' => Timing::whereId($request->timing_id)->first()
                ]
            );
            return true;
        }
        return false;
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
                'notes' => 'max:500',
                'day_selected_format' => 'required|date_format:m/d/Y',
            ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $service = Service::whereId($request->service_id)->first();
        if ($this->addServiceToCart($request, $service)) {
            return redirect()->back()->with('success', trans('message.service_added_to_cart_successfully'));
        }
        return redirect()->back()->with('error', trans('message.service_is_not_added_to_cart'));
    }

    public function addItem(Request $request)
    {

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
        $this->cart->remove($id);
        return redirect()->back()->with('success', 'general.cart_item_removed_successfully');
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

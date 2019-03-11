<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\OrderMeta;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Service;
use App\Models\Timing;
use App\Services\CartTrait;
use App\Services\ShippingManager;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $cart;
    use CartTrait;

    public function __construct(\Gloudemans\Shoppingcart\Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $cart = $this->cart->content();
        $coupon = session()->has('coupon') ? session('coupon') : null;
        return view('frontend.wokiee.four.modules.cart.index', compact('cart', 'coupon'));
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
        if ($this->addServiceToCart($request, $service, $this->cart)) {
            return redirect()->back()->with('success', trans('message.service_added_to_cart_successfully'));
        }
        return redirect()->back()->with('error', trans('message.service_is_not_added_to_cart'));
    }


    public function addProduct(Request $request)
    {
        $validator = validator($request->all(),
            [
                'product_id' => 'required|exists:services,id',
                'product_attribute_id' => 'nullable|exists:services,id',
                'size_id' => 'required_with:product_attribute_id|nullable|exists:sizes,id',
                'color_id' => 'required_with:product_attribute_id|nullable|exists:colors,id',
                'qty' => 'required|numeric|min:1',
                'type' => 'required|alpha',
            ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $product = Product::whereId($request->product_id)->first();
        if ($this->addProductToCart($request, $product,$this->cart)) {
            return redirect()->back()->with('success', trans('message.product_added_to_cart_successfully'));
        }
        return redirect()->back()->with('error', trans('message.product_is_not_added_to_cart_successfully'));
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

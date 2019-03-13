<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Jobs\CheckCartItems;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Service;
use App\Services\CartTrait;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Cart;
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
        CheckCartItems::dispatch();
        $elements = $this->cart->content();
        $coupon = session()->has('coupon') ? session('coupon') : null;
        return view('frontend.wokiee.four.modules.cart.index', compact('elements', 'coupon'));
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
                'product_id' => 'required|exists:products,id',
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
        if ($this->addProductToCart($request, $product, $this->cart)) {
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
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric|min:8',
            'address' => 'required|min:5',
            'country_id' => 'required|exists:countries,id',
        ]);
        if ($validate->fails()) {
            return redirect()->route('frontend.cart.index')->withErrors($validate);
        }
        $elements = $this->cart->content();
        session()->put('userCartInfo', request()->except('_token'));
        return view('frontend.wokiee.four.modules.cart.show', compact('elements'));
    }

    public function show()
    {
        $elements = $this->cart->content();
        $user = auth()->user();
        return view('frontend.wokiee.four.modules.cart.show', compact('elements', 'user'));
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

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\OrderStore;
use App\Jobs\CreatePaymentURL;
use App\Models\Order;
use App\Models\OrderMeta;
use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where(['user_id' => auth()->user()->id, 'status' => 'success'])->with('order_metas.product')->get();
        $ids = $orders->pluck('order_metas')->flatten()->unique()->pluck('product.id')->toArray();
        $elements = Product::whereIn('id', $ids)->paginate(12);
        return view('frontend.modules.order.index', compact('elements', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $user->update([
                'name' => $request->name,
                'password' => bcrypt($request->mobile),
                'country_id' => $request->country_id,
                'mobile' => $request->mobile,
                'address' => $request->address,
            ]);
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $user->update([
                    'name' => $request->name,
                    'password' => bcrypt($request->mobile),
                    'country_id' => $request->country_id,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                ]);
            } else {
                $user = User::create([
                    'name' => $request->email,
                    'email' => $request->email,
                    'password' => bcrypt($request->mobile),
                    'country_id' => $request->country_id,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                ]);
            }

        }
        return $user;
    }

    public function store(Request $request)
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
        $user = $this->createUser($request);
        if ($user) {
            $coupon = session()->has('coupon') ? session('coupon') : false;
            $order = Order::create([
                'price' => $this->cart->total(),
                'net_price' => $this->cart->total(),
                'mobile' => $request->mobile,
                'country' => $user->country->slug,
                'country' => $request->area ? $request->area : null,
                'email' => $request->email,
                'address' => $request->address,
                'notes' => $request->notes,
                'user_id' => $user->id,
                'discount' => $coupon ? ($coupon->is_percentage ? ($this->cart->subTotal() * ($coupon->value / 100)) : $coupon->value) : 0,
                'coupon_id' => $coupon ? $coupon['id'] : null
            ]);
            if ($order) {
                $this->cart->content()->each(function ($element) use ($order, $user) {
                    $order->order_metas()->create([
                        'order_id' => $order->id,
                        'product_id' => $element->options->type === 'product' ? $element->options->element_id : null,
                        'service_id' => $element->options->type === 'service' ? $element->options->element_id : null,
                        'item_name' => $element->options->element->name,
                        'item_type' => $element->options->type,
                        'product_attribute_id' => $element->options->product_attribute_id,
                        'qty' => $element->qty,
                        'price' => $element->price,
                        'shipment_cost' => $element->options->shipment_cost,
                        'notes' => $element->options->notes ? $element->options->notes : null,
                        'product_size' => $element->options->size ? $element->options->size->name : null,
                        'product_color' => $element->options->color ? $element->options->color->name : null,
                        'service_date' => $element->options->day_selected,
                        'service_time' => $element->options->timing ? $element->options->timing->start : null,
                        'timing_id' => $element->options->timing_id,
                        'destination_id' => $user->country_id,
                    ]);
                });
                auth()->login($user);
                $elements = $this->cart->content();
                return view('frontend.wokiee.four.modules.cart.show', compact('elements', 'order'))->with('success', trans('message.register_account_password_is_your_mobile'));
            }
        } else {
            return 'here error case';
            return redirect()->route('frontend.cart.index')->with('error', trans('please_check_your_information_again'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::whereId($id)->with('order_metas.product', 'order_metas.product_attribute.color', 'order_metas.product_attribute.size')->first();
        $coupon = session('coupon') ? session('coupon') : null;
        return view('frontend.modules.order.show', compact('order', 'coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

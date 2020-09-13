<?php

namespace App\Services\Traits;

use App\Jobs\sendSuccessOrderEmail;
use App\Models\Country;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Questionnaire;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Timing;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

trait OrderTrait
{

    public function createQuestionnaireOrder(Questionnaire $questionnaire, User $user)
    {
        $order = Order::create([
            'price' => $questionnaire->net_price,
            'net_price' => $questionnaire->net_price,
            'mobile' => $questionnaire->mobile,
            'country' => $user->country->slug,
            'email' => $questionnaire->email,
            'address' => $user->address,
            'user_id' => $questionnaire->client_id, // the one who asked for the design
        ]);
        $orderMeta = $order->order_metas()->create([
            'qty' => 1,
            'price' => $questionnaire->net_price,
            'notes' => $questionnaire->notes,
            'item_name' => strtoupper(class_basename($questionnaire)),
            'item_type' => strtoupper(class_basename($questionnaire)),
            'merchant_id' => $questionnaire->user_id,
            'questionnaire_id' => $questionnaire->id
        ]);
        return $order;
    }

    public function createWebOrder(Request $request, User $user)
    {
        $validate = validator($request->all(), [
            'country_id' => 'required|exists:countries,id',
            'collection_id' => 'exists:collections,id',
//            'shipment_fees' => 'required|numeric'
        ]);
        if ($validate->fails()) {
            return redirect()->route('frontend.cart.index')->withErrors($validate);
        }
        $coupon = session()->has('coupon') ? session('coupon') : false;
        $country = Country::whereId($request->country_id)->first();
        $order = Order::create([
            'price' => $this->cart->total(),
            'net_price' => $this->cart->total(),
            'mobile' => $request->mobile,
            'country' => $country->name,
            'area' => $request->area ? $request->area : null,
            'email' => $request->email,
            'address' => $request->address,
            'notes' => $request->notes,
            'user_id' => $user->id,
            'cash_on_delivery' => $request->has('cash_on_delivery') ? $request->cash_on_delivery && $country->is_local: false,
            'discount' => $coupon ? ($coupon->is_percentage ? ($this->cart->subTotal() * ($coupon->value / 100)) : $coupon->value) : 0,
            'coupon_id' => $coupon ? $coupon['id'] : null,
//            'shipment_fees' => $request->has('shipment_fees') ? $request->shipment_fees : 0
        // Now it's fixed shipment fees from the country
            'shipment_fees' => $this->cart->content()->where('options.type', 'country')->first()->total()
        ]);
        if ($order) {
            $this->cart->content()->each(function ($element) use ($order, $user) {
                if ($element->options->type === 'product' || $element->options->type === 'service') {
                    $order->order_metas()->create([
                        'order_id' => $order->id,
                        'product_id' => $element->options->type === 'product' ? $element->options->element_id : null,
                        'service_id' => $element->options->type === 'service' ? $element->options->element_id : null,
                        'product_attribute_id' => $element->options->product_attribute_id,
                        'collection_id' => $element->options->collection_id ? $element->options->collection_id : null,
                        'item_name' => $element->options->element->name,
                        'item_type' => $element->options->type,
                        'qty' => $element->qty,
                        'price' => $element->price,
//                            'shipment_cost' => $element->options->shipment_cost,
                        'notes' => $element->options->notes ? $element->options->notes : null,
                        'product_size' => $element->options->size ? $element->options->size->name : null,
                        'product_color' => $element->options->color ? $element->options->color->name : null,
                        'service_date' => $element->options->day_selected,
                        'service_time' => $element->options->timing ? $element->options->timing->start : null,
                        'timing_id' => $element->options->timing_id,
                        'destination_id' => $user->country_id,
                    ]);
                }
            });
            return $order;
        }
        return false;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    {
        $validate = validator($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric|min:8',
            'address' => 'required|min:5',
            'country_id' => 'required|exists:countries,id',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        if (auth()->check()) {
            $user = auth()->user();
            $user->update([
                'name' => $request->name,
                'password' => bcrypt($request->mobile),
                'country_id' => $request->country_id,
                'mobile' => $request->mobile,
                'address' => $request->address,
                'role_id' => $user->role_id ? $user->role_id : Role::where('is_client', true)->first()->id
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
                    'role_id' => Role::where('is_client', true)->first()->id
                ]);
            }

        }
        return $user;
    }

    public function checkCart(Request $request)
    {
        try {
            $validate = validator($request->all(), [
                'order_id' => 'numeric|exists:orders,id',
                'name' => 'required|min:3|max:200',
                'email' => 'required|email',
                'mobile' => 'required:min:6',
                'address' => 'required|min:5',
                'country_id' => 'required|exists:countries,id',
                'collection_id' => 'numeric|exists:collections,id',
                'cart' => 'required|array',
                'coupon_id' => 'nullable|exists:coupons,id',
                'price' => 'required',
                'net_price' => 'required',
                'shipment_fees' => 'required',
                'discount' => 'required',
                'payment_method' => 'required|min:3',
                'shipment_fees' => 'required|numeric',
                'cash_on_delivery' => 'required|boolean',
            ]);
            if ($validate->fails()) {
                return $validate->errors()->first();
            }
            if ($request->has('order_id')) {
                $className = env('ORDER_MODEL_PATH');
                $order = new $className();
                $order = $order->whereId($request->order_id)->with('order_metas.product', 'order_metas.product_attribute')->first();
                if ($order) {
                    return $order;
                }
            }
            $user = User::where(['email' => $request->email])->first();
            if ($user) {
                $user->update([
                    'name' => $request->name,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'area' => $request->area,
                    'country_id' => $request->country_id,
                ]);
            } else {
                $user = User::create([
                    'email' => $request->email,
                    'name' => $request->name,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'area' => $request->area,
                    'country_id' => $request->country_id,
                    'password' => bcrypt($request->mobile),
                    'role_id' => Role::where('is_client', true)->first()->id
                ]);

            }
            return $order = $this->createApiOrder($request, $user);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function createApiOrder(Request $request, $user)
    {
        try {
            if (!$user->country->is_local) {
                foreach ($request->cart as $item) {
                    if ($item['type'] === 'service') {
                        return trans('message.services_are_only_allowed_locally_your_order_is_not_complete');
                    }
                }
            }
            $order = Order::create([
                'price' => $request->price,
                'net_price' => $request->net_price,
                'mobile' => $request->mobile,
                'country' => $user->country->slug,
                'area' => $request->area ? $request->area : null,
                'email' => $request->email,
                'address' => $request->address,
                'notes' => $request->notes,
                'user_id' => $user->id,
                'discount' => $request->discount,
                'shipment_fees' => $request->shipment_fees,
                'coupon_id' => $request->has('coupon_id') ? $request->coupon_id : null,
                'payment_method' => $request->payment_method,
                'cash_on_delivery' => $request->cash_on_delivery,
            ]);
            if ($order) {
                foreach ($request->cart as $item) {
                    if ($item['type'] === 'product') {
                        $product = Product::whereId($item['product_id'])->first();
                        $productAttribute = $product->hasRealAttributes ? ProductAttribute::whereId($item['product_attribute_id'])->first() : null;
//                        abort('404','size name is'.$productAttribute->size->name);
                        $order->order_metas()->create([
                            'order_id' => $order->id,
                            'product_id' => $item['product_id'],
                            'product_attribute_id' => $product->hasRealAttributes ? $item['product_attribute_id'] : null,
                            'collection_id' => $request->collection_id,
                            'qty' => $item['qty'],
                            'price' => $item['element']['finalPrice'],
                            'item_name' => $item['element']['name'],
                            'item_type' => class_basename($product),
                            'notes' => $item['notes'] ? $item['notes'] : null,
                            'product_size' => $productAttribute && $productAttribute->size ? $productAttribute->size->name : $product->size && $product->size->name ? $product->size->name : '',
                            'product_color' => $productAttribute && $productAttribute->color ? $productAttribute->color->name : $product->color && $product->color->name  ? $product->color->name: '',
                        ]);
                    } else if ($item['type'] === 'service') {
                        // later we should check of multi Booking !!!
                        $timing = Timing::whereId($item['timing_id'])->first();
                        $order->order_metas()->create([
                            'order_id' => $order->id,
                            'service_id' => $item['service_id'],
                            'qty' => $item['qty'],
                            'price' => $item['element']['finalPrice'],
                            'item_name' => $item['element']['name'],
                            'item_type' => $item['type'],
                            'notes' => $item['notes'] ? $item['notes'] : null,
                            'timing_id' => $item['timing_id'],
                            'service_date' => Carbon::now()->format('l') === $timing->day ? Carbon::parse($timing->day)->addWeek() : Carbon::parse($timing->day),
                            'service_time' => $timing->start
                        ]);
                    }
                }
                if ($order->cash_on_delivery) {
                    $contactus = Setting::first();
                    dispatch(new sendSuccessOrderEmail($order, $order->user, $contactus))->delay(now()->addSeconds(10));
                }
                return $order;
            }
            return trans('message.order_is_not_created');
        } catch (\Exception $e) {
            return $e->getLine() . ' - '. $e->getMessage();
        }
    }
}

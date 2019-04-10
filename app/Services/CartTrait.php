<?php

namespace App\Services;

use App\Models\Color;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Service;
use App\Models\Size;
use App\Models\Timing;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: usama
 * Date: 2019-03-11
 * Time: 08:27
 */
trait CartTrait
{
    public function addServiceToCart(Request $request, Service $service, $cart)
    {
        // Check all orders that may have metas with the same service and timing on the same date !!!
        if ($service->getCanBookAttribute(request('timing_id'), request('day_selected_format'))) {
            $element = $cart->content()->where('id', '=', $service->UId)->first();
            if ($element) {
                $cart->remove($element->rowId);
            }
            $cart->add($service->UId, $service->name, 1, $service->finalPrice,
                [
                    'type' => 'service',
                    'element_id' => $service->id,
                    'collection_id' => $request->has('collection_id') ? $request->collection_id : null,
                    'day_selected' => Carbon::parse($request->day_selected_format),
                    'timing_id' => $request->timing_id,
                    'notes' => $request->notes,
                    'element' => $service,
                    'company' => $service->user->slug,
                    'timing' => Timing::whereId($request->timing_id)->first()
                ]
            );
            return true;
        }
        return false;
    }

    public function addProductToCart(Request $request, Product $product, $cart)
    {
        if ($product->getCanOrderAttribute($request->qty, $request->product_attribute_id)) {
            $element = $cart->content()->where('id', '=', $product->UId)->first();
            if ($element) {
                $cart->remove($element->rowId);
            }
            if (checkShipmentAvailability(getClientCountry()->id, $product->shipment_package->countries->pluck('id')->toArray())) {
                $cart->add($product->UId, $product->name, $request->qty, (double) $product->finalPrice,
                    [
                        'type' => 'product',
                        'element_id' => $product->id,
                        'collection_id' => $request->has('collection_id') ? $request->collection_id : null,
                        // each product * his own package Charge ==> consider different heights / weight
                        'shipment_cost' => $product->packageFeePrice,
                        'country_destination' => getClientCountry(),
                        'product_attribute_id' => $request->product_attribute_id,
                        'size_id' => $request->size_id,
                        'color_id' => $request->color_id,
                        'color' => Color::whereId($request->color_id)->first(),
                        'size' => Size::whereId($request->size_id)->first(),
                        'company' => $product->user->slug,
                        'element' => $product
                    ]
                );
                return true;
            }
            return false;
        }
        return false;
    }

    public function addCouponToCart(Request $request, Coupon $coupon, $cart) {
        if(session()->has('coupon')) {
            session()->remove('coupon');
//            $cart->remove('coupon');
        }
        session()->put('coupon', $coupon);
        $couponValue = $coupon->is_percentage ? ($this->cart->total() * $coupon->value) / 100 : $coupon->value;
        if($couponValue > 0) {
            $coupon = Cart::content()->where('id','coupon')->first();
            $cart->remove($coupon->rowId);
            $cart->add('coupon', 'coupon', 1, (float)-($couponValue), [
                'type' => 'coupon',
                'element_id' => $coupon->id,
                'element' => $coupon
            ]);
            return true;
        }
        return false;
    }
}
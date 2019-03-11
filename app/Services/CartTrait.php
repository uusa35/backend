<?php

namespace App\Services;

use App\Models\Color;
use App\Models\Product;
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
        if ($service->canBook(request('timing_id'), request('day_selected_format'))) {
            $element = $cart->content()->where('id', '=', $service->UId)->first();
            if ($element) {
                $cart->remove($element->rowId);
            }
            $cart->add($service->UId, $service->name, 1, $service->finalPrice,
                [
                    'type' => 'service',
                    'service_id' => $service->id,
                    'day_selected' => Carbon::parse($request->day_selected_format),
                    'timing_id' => $request->timing_id,
                    'notes' => $request->notes,
                    'service' => $service,
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
        if ($product->getCanOrderAttribute($request->qty)) {
            $element = $cart->content()->where('id', '=', $product->UId)->first();
            if ($element) {
                $cart->remove($element->rowId);
            }
            $cart->add($product->UId, $product->name, $request->qty, $product->finalPrice,
                [
                    'type' => 'product',
                    'product_id' => $product->id,
                    'product_attribute_id' => $request->product_attribute_id,
                    'size_id' => $request->size_id,
                    'color_id' => $request->color_id,
                    'color' => Color::whereId($request->color_id)->first(),
                    'size' => Size::whereId($request->size_id)->first(),
                    'company' => $product->user->slug,
                    'product' => $product
                ]
            );
            return true;
        }
        return false;
    }
}
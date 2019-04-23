<?php

namespace App\Jobs;

use App\Models\Product;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CheckCartItems implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $cart = Cart::content();
        $cart->each(function ($item, $rowId) {
            if ($item->options->type === 'product') {
                $product = Product::whereId($item->options->element_id)->with('product_attributes', 'shipment_package.countries')->first();
                if (!checkShipmentAvailability(getCurrentCountrySessionId(), $product->shipment_package->countries->pluck('id')->toArray())) {
                    Cart::remove($rowId);
                }
                if (!$product->getCanOrderAttribute($item->qty, $item->options->product_attribute_id)) {
                    Cart::remove($rowId);
                }
            } elseif($item->options->type === 'service') {
                $service = Service::whereId($item->options->element_id)->first();
                if (!$service->getCanBookAttribute($item->options->timing->id, $item->options->day_selected)) {
                    Cart::remove($rowId);
                }
            }
        });
    }
}

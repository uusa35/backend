<?php
/**
 * Created by PhpStorm.
 * User: usama
 * Date: 5/13/18
 * Time: 11:07 AM
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

trait ProductHelpers
{
    /**
     * Description : will fetch all products of the current company (and branch) that are bestSales
     * according to the orders that are completed
     * @param $companyId
     * @return mixed
     */
    public function scopeBestSalesProducts()
    {
        return DB::table('products')
            ->where(['products.active' => 1])
            ->join('orders', function ($j) {
                $j->where('orders.status', '=', 'success');
            })
            ->join('order_metas', function ($j) {
                $j->on('orders.id', '=', 'order_metas.order_id')->on('products.id', '=', 'order_metas.product_id');
            })
            ->select('products.id', DB::raw('count(*) as count'))
            ->groupBy('products.id')// responsible to get the sum of products returned
            ->orderBy('count', 'DESC')// DESC
            ->take(7)->pluck('id');
    }

    public function scopeServeCountries($q)
    {
        return $q->whereHas('user', function ($q) {
            $q->whereHas('shipment_packages', function ($q) {
                return $q->whereHas('countries', function ($q) {
                    return $q->where(['country_id' => getCurrentCountrySessionId()]);
                });
            });
        });
    }

    public function scopeHasStock($q)
    {
        if ($this->has_attributes) {
            return $q->whereHas('product_attributes', function ($q) {
                return $this->product_attributes->sum('qty') >= 1 ? $q : $q->where('id', 0);
            });
        } else {
            return $q->where('qty', '>=', 1);
        }
    }

    public function getAvailableQtyAttribute()
    {
        return $this->has_attributes ? $this->product_attributes->sum('qty') : $this->qty;
    }

    public function getTotalFinalPriceWithShipmentCheck(Product $product, Country $destinationCountry, User $merchant, $qty)
    {
        if (in_array($destinationCountry->id, $product->shipment_package->countries->pluck('id')->toArray(), true)) {
            $finalPriceWithShipment = (($product->weight * $product->shipment_package->charge) + $product->finalPrice) * $qty;
            return $finalPriceWithShipment;
        }
        return false;
    }

    public function getFinalPriceWithShipmentAttribute()
    {
        return ((double)$this->weight * (double)$this->shipment_package->charge) + $this->finalPrice;
    }

    public function getPackageFeePriceAttribute()
    {
        return (double)$this->weight * (double)$this->shipment_package->charge;
    }
}

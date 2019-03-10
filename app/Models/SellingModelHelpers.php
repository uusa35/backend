<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Created by PhpStorm.
 * User: usama
 * Date: 2019-03-07
 * Time: 07:10
 */
trait SellingModelHelpers
{
    public function getCanOrderAttribute()
    {
        if ($this->has_attributes) {
            return $this->is_available && $this->product_attributes->sum('qty') > 0;
        }
        return $this->is_available && $this->qty > 0;
    }

    public function getCanBookAttribute($timingId, $daySelectedFormat)
    {
        $orderMetasWithSameService = OrderMeta::where(['service_id' => $this->service_id, 'timing_id' => $timingId])->whereDate('service_date', '=', Carbon::parse($daySelectedFormat))->get();
        if ($this->multi_booking && $orderMetasWithSameService->count() < $this->booking_limit) {
            return true;
        }
        return false;
    }

    public function getAvailableQtyAttribute()
    {
        if ($this->has_attributes) {
            return $this->product_attributes->sum('qty');
        }
        return $this->qty;
    }

    public function scopeAvailableItems($q)
    {
        return $q->where(['is_available' => true]);
    }

    public function scopeOnSaleOnHome($q)
    {
        return $q->onSale()->onHome();
    }

    public function scopeOnSale($q)
    {
        return $q->where('on_sale', true)->whereDate('end_sale', '>', Carbon::now());
    }

    public function getIsOnSaleAttribute()
    {
        return $this->on_sale && Carbon::parse($this->end_sale) > Carbon::now();
    }

    public function scopeHotDeals($q)
    {
        return $q->onSale()->where('is_hot_deal', true);
    }

    public function getIsReallyHotAttribute()
    {
        return $this->isOnSale && $this->is_hot_deal;
    }

    public function getFinalPriceAttribute()
    {
        return $this->isOnSale ? $this->sale_price : $this->price;
    }

    public function getConvertedFinalPriceAttribute()
    {
        $currentCurrency = session()->get('currency');
        return $this->finalPrice * $currentCurrency->exchange_rate;
    }

    public function getConvertedPriceAttribute()
    {
        $currentCurrency = session()->get('currency');
        return $this->price * $currentCurrency->exchange_rate;
    }

    public function getConvertedSalePriceAttribute()
    {
        $currentCurrency = session()->get('currency');
        return $this->sale_price * $currentCurrency->exchange_rate;
    }

    public function getUIdAttribute()
    {
        return str_singular($this->getTable()) . $this->id;
    }

    public function scopeHasProductAttributes($q)
    {
        return $q->whereHas('product_attributes', function ($q) {
            return  $q;
        }, '>', 0);
    }

}
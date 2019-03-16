<?php

namespace App\Models;

use App\Services\Search\QueryFilters;
use Carbon\Carbon;

/**
 * Created by PhpStorm.
 * User: usama
 * Date: 2019-03-07
 * Time: 07:10
 */
trait SellingModelHelpers
{
    public function getCanOrderAttribute($qty = 1)
    {
        if ($this->has_attributes) {
            return $this->active && $this->is_available && $this->product_attributes->sum('qty') >= $qty;
        }
        return $this->active && $this->is_available && $this->qty >= $qty;
    }

    public function getCanBookAttribute($timingId, $daySelectedFormat)
    {
        // service is active and no orderMetas in the same date and time then go ahead
        $orderMetasWithSameService = OrderMeta::where(
            [
                'service_id' => $this->service_id,
                'timing_id' => $timingId
            ])->whereDate('service_date', '=', Carbon::parse($daySelectedFormat))->get();
        if ($this->multi_booking && $this->active) {
            return $orderMetasWithSameService->count() < $this->booking_limit && $this->active;
        }
        return $orderMetasWithSameService->count() < 1 && $this->is_available && $this->active ? true : false;
    }

    public function scopeAvailable($q)
    {
        return $q->where('is_available',true);
    }

    public function scopeOnSaleOnHome($q)
    {
        return $q->onSale()->where('on_home', true);
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
            return $q;
        }, '>', 0);
    }

    public function getRelatedItems($item)
    {
        $categoriesId = $item->categories->pluck('id');
        return $this->where(['user_id' => $item->user_id])->where('id', '!=', $item->id)->whereHas('categories', function ($q) use ($categoriesId) {
            return $q->whereId($categoriesId);
        })->with('images', 'favorites')->take(10)->get();
    }

    public function getIsFavoritedAttribute()
    {
        return auth()->check() ? in_array(auth()->user()->id, $this->favorites->pluck('id')->toArray()) : false;
    }

    /**
     * @param $q
     * @param QueryFilters $filters
     * @return \Illuminate\Database\Eloquent\Builder
     * QueryFilters used within the search
     */
    public function scopeFilters($q, QueryFilters $filters)
    {
        return $filters->apply($q);
    }

}
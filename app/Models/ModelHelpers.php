<?php
/**
 * Created by PhpStorm.
 * User: usama
 * Date: 5/10/18
 * Time: 2:34 PM
 */

namespace App\Models;

use Carbon\Carbon;

trait ModelHelpers
{
    public function scopeActive($q)
    {
        return $q->where('active', true);
    }

    public function scopeOnHome($q)
    {
        return $q->where('on_home', true);
    }

    public function scopeOnNew($q)
    {
        return $q->where('on_new', true);
    }

    public function scopeHasImages($q)
    {
        return $q->has('images', '>', 0);
    }

    public function scopeOnSaleOnHome($q)
    {
        return $q->onSale()->onHome();
    }

    public function scopeOnSale($q)
    {
        return $q->where('on_sale',true)->whereDate('end_sale', '>', Carbon::now());
    }

    public function getIsOnSaleAttribute()
    {
        return $this->on_sale && Carbon::parse($this->end_sale) > Carbon::now();
    }

    public function scopeHotDeals($q)
    {
        return $q->onSale()->where('is_hot_deal', true);
    }

    public function getIsReallyHotAttribute() {
        return $this->isOnSale && $this->is_hot_deal;
    }

    public function getImageLargeLinkAttribute()
    {
        return asset(env('LARGE') . $this->image);
    }

    public function getImageMediumLinkAttribute()
    {
        return asset(env('MEDIUM') . $this->image);
    }

    public function getImageThumbLinkAttribute()
    {
        return asset(env('THUMBNAIL') . $this->image);
    }

    public function getPathLinkAttribute()
    {
        return asset(env('FILES') . $this->path);
    }
}
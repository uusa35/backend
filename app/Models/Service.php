<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends PrimaryModel
{
    use SoftDeletes;
    protected $localeStrings = ['name', 'description', 'notes'];
    protected $guarded = [''];
    protected $dates = ['created_at', 'deleted_at', 'start_sale', 'end_sale'];
    protected $casts = [
        'on_sale' => 'boolean',
        'on_home' => 'boolean',
        'active' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function timings()
    {
        return $this->hasMany(Timing::class)->orderBy('day_no','desc');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_service');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imagable');
    }

    // Many Morph
    public function slides()
    {
        return $this->morphMany(Slide::class, 'slidable');
    }

    // Many Morph
    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notificationable');
    }

    // ManyToMay Morph
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    // ManyToMany Morph
    public function collections()
    {
        return $this->morphToMany(Collection::class, 'collectionable');
    }

    public function scopeHasTimings()
    {
        return $this->has('timings', '>', 0);
    }

    public function getIsOnSaleAttribute()
    {
        return $this->on_sale && $this->end_sale > Carbon::now() ? true : false;
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

}

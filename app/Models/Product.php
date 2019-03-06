<?php

namespace App\Models;

use App\Services\Search\QueryFilters;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends PrimaryModel
{
    use ProductHelpers, SoftDeletes, ModelHelpers;
    protected $localeStrings = ['name', 'description', 'notes'];
    protected $guarded = [''];
    protected $appends = ['isOnSale'];
    protected $dates = ['created_at', 'deleted_at', 'start_sale', 'end_sale'];
    protected $casts = [
        'on_sale' => 'boolean',
        'on_sale_on_homepage' => 'boolean',
        'active' => 'boolean',
        'home_delivery_availability' => 'boolean'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product_attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function order_meta()
    {
        return $this->belongsTo(OrderMeta::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_attributes', 'product_id', 'color_id');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_attributes', 'product_id', 'size_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'brand_product');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imagable');
    }

    public function slides()
    {
        return $this->morphMany(Slide::class, 'slidable');
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notificationable');
    }

    // ManyToMay Morph
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    // ManyToMay Morph
    public function collections()
    {
        return $this->morphToMany(Collection::class, 'collectionable');
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

<?php

namespace App\Models;


class OrderMeta extends PrimaryModel
{
    protected $guarded = [''];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function timing()
    {
        return $this->belongsTo(Timing::class);
    }

    public function product_attribute()
    {
        return $this->belongsTo(ProductAttribute::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function getIsProductTypeAttribute()
    {
        return $this->item_type === 'product';
    }
}

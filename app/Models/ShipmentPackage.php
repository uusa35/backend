<?php

namespace App\Models;

class ShipmentPackage extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['slug', 'notes'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }
}

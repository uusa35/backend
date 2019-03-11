<?php

namespace App\Models;

class Area extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['slug'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function shipment_packages()
    {
        return $this->hasMany(ShipmentPackage::class);
    }
}

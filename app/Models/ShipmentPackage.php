<?php

namespace App\Models;

class ShipmentPackage extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['slug', 'notes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}

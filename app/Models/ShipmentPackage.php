<?php

namespace App\Models;

class ShipmentPackage extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['slug'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

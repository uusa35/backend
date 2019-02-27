<?php

namespace App\Models;


class Country extends PrimaryModel
{
    protected $localeStrings = ['name'];
    protected $guarded = [''];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function currency()
    {
        return $this->hasOne(Currency::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}

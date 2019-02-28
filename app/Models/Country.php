<?php

namespace App\Models;


class Country extends PrimaryModel
{
    protected $localeStrings = ['name'];
    protected $guarded = [''];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function currency()
    {
        return $this->hasOne(Currency::class);
    }

    // hasManyThrough
    // Many Products though user
    public function products()
    {
        return $this->hasManyThrough(Product::class, User::class);
    }

    // hasManyThrough
    // Many Products though user
    public function branches()
    {
        return $this->hasManyThrough(Branch::class, Area::class);
    }
}

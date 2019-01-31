<?php

namespace App\Models;

class Tag extends PrimaryModel
{
    protected $localeStrings = ['slug'];
    protected $guarded = [''];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tag');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_tag');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_tag');
    }
}

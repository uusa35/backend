<?php

namespace App\Models;

class Collection extends PrimaryModel
{
    // Company that owns such tag;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'collectable');
    }

    public function services()
    {
        return $this->morphedByMany(Service::class, 'collectable');
    }
}

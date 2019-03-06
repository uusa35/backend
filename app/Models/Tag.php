<?php

namespace App\Models;

class Tag extends PrimaryModel
{
    protected $localeStrings = ['slug'];
    protected $guarded = [''];

    // Company that owns such tag;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }

    public function services()
    {
        return $this->morphedByMany(Service::class, 'taggable');
    }
}

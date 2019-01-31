<?php

namespace App\Models;

class Service extends PrimaryModel
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function timings()
    {
        return $this->hasMany(Timing::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_service');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

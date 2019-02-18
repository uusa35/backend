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

    /**
     * MorphRelation
     * MorphOne = many hasONe relation
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imagable');
    }

    public function sliders()
    {
        return $this->morphMany(Slider::class, 'slidable');
    }
}

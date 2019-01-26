<?php

namespace App\Models;

class Gallery extends PrimaryModel
{
    protected $localeStrings = ['description'];
    protected $guarded = [''];


    /**
     * MorphRelation
     * many HasOne Relation
     * reverse
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function galleryable()
    {
        return $this->morphTo();
    }

    /**
     * Gallery Image
     * hasMany relation
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}

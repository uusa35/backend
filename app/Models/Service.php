<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends PrimaryModel
{
    use SoftDeletes, SellingModelHelpers, ServiceHelpers;
    protected $localeStrings = ['name', 'description', 'notes'];
    protected $guarded = [''];
    protected $appends = ['UId'];
    protected $dates = ['created_at', 'deleted_at', 'start_sale', 'end_sale'];
    protected $casts = [
        'on_sale' => 'boolean',
        'on_home' => 'boolean',
        'active' => 'boolean',
        'is_available' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function timings()
    {
        return $this->hasMany(Timing::class)->orderBy('day_no', 'desc');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_service');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imagable');
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites','service_id');
    }

    // Many Morph
    public function slides()
    {
        return $this->morphMany(Slide::class, 'slidable');
    }

    // Many Morph
    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notificationable');
    }

    // ManyToMay Morph
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    // ManyToMany Morph
    public function collections()
    {
        return $this->morphToMany(Collection::class, 'collectionable');
    }

    public function scopeHasTimings()
    {
        return $this->has('timings', '>', 0);
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: usama
 * Date: 5/10/18
 * Time: 2:34 PM
 */
namespace App\Models;

trait ModelHelpers
{
    public function scopeActive($q)
    {
        return $q->where('active', true);
    }

    public function scopeOnHome($q)
    {
        return $q->where('on_home', true);
    }

    public function scopeOnNew($q)
    {
        return $q->where('on_new', true);
    }

    public function scopeIsFeatured($q) {
        return $q->where(['is_featured' => true]);
    }

    public function scopeHasImage($q)
    {
        return $q->has('images', '>', 0);
    }

    public function getImageLargeLinkAttribute()
    {
        return asset(env('LARGE') . $this->image);
    }

    public function getImageMediumLinkAttribute()
    {
        return asset(env('MEDIUM') . $this->image);
    }

    public function getImageThumbLinkAttribute()
    {
        return asset(env('THUMBNAIL') . $this->image);
    }

    public function getPathLinkAttribute()
    {
        return asset(env('FILES') . $this->path);
    }

}
<?php

namespace App\Models;

class Commercial extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['name', 'caption'];

    public function scopeDouble($q)
    {
        return $q->where(['is_double' => true]);
    }

    public function scopeTriple($q)
    {
        return $q->where(['is_triple' => true]);
    }

    public function scopeSingle($q)
    {
        return $q->where(['is_triple' => false, 'is_double' => false]);
    }

    public function getLinkAttribute()
    {
        $this->path ? asset(env('FILES') . $this->path) : $this->url;
    }
}

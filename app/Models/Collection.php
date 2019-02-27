<?php

namespace App\Models;

class Collection extends PrimaryModel
{
    public function products() {
        return $this->belongsToMany(Product::class);
    }
}

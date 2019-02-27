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
}
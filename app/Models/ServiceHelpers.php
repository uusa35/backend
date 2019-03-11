<?php
/**
 * Created by PhpStorm.
 * User: usama
 * Date: 2019-03-11
 * Time: 14:00
 */

namespace App\Models;


trait ServiceHelpers
{
    public function scopeServeCountries($q)
    {
        return $q->whereHas('user', function ($q) {
            $q->where(['country_id' => getCurrentClientCountryId()]);
        });

    }

    public function scopeHasTiming($q)
    {
        return $q->has('timings', '>', 0);
    }
}
<?php

namespace App\Models;


class Day extends PrimaryModel
{
    public function timings() {
        return $this->hasMany(Timing::class);
    }
}

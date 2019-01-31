<?php

namespace App\Models;

class Timing extends PrimaryModel
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

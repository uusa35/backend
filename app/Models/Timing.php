<?php

namespace App\Models;

use Carbon\Carbon;

class Timing extends PrimaryModel
{
    protected $dates = ['created_at', 'updated_at'];
    protected $localeStrings = ['notes','day_name'];

    public function days()
    {
        return $this->belongsTo(Day::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeWorkingDays($q)
    {
        return $q->where(['is_off' => false]);
    }

    public function scopeOffDays($q)
    {
        return $q->where(['is_off' => true]);
    }

    public function getStartDutyAttribute()
    {
        return Carbon::parse($this->start)->format('g:ia');
    }

    public function getEndDutyAttribute()
    {
        return Carbon::parse($this->end)->format('g:ia');
    }
}

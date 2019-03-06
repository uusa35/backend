<?php

namespace App\Models;

class Notification extends PrimaryModel
{
    protected $guarded = [''];

    public function users()
    {
        return $this->morphedByMany(User::class, 'notifiable');
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'notifiable');
    }

    public function services()
    {
        return $this->morphedByMany(Service::class, 'notifiable');
    }

}

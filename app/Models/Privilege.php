<?php

namespace App\Models;


class Privilege extends PrimaryModel
{
    protected $localeStrings = ['slug'];
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withPivot('view', 'create', 'update', 'delete');
    }
}

<?php

namespace App\Models;

class Slide extends PrimaryModel
{
    use ModelHelpers;
    protected $guarded = [''];
    protected $localeStrings = ['caption','title'];

    public function slidable()
    {
        return $this->morphTo();
    }
}

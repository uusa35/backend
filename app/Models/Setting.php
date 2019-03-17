<?php

namespace App\Models;


class Setting extends PrimaryModel
{
    protected $localeStrings = ['address','country', 'company'];
    protected $guarded = [''];

    public function getLogoLargeAttribute() {
        return asset(env('LARGE') . $this->logo);
    }

    public function getLogoThumbAttribute() {
        return asset(env('THUMBNAIL') . $this->logo);
    }
}

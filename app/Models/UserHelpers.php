<?php

namespace App\Models;


trait UserHelpers
{
    public function getIsSuperAttribute()
    {
        return $this->role->is_super;
    }

    public function getIsAdminOrAboveAttribute()
    {
        return $this->role->is_super ? $this->role->is_super : $this->role->is_dmin;
    }

    public function getIsAdminAttribute()
    {
        return $this->role->is_admin;
    }

    public function getIsCompanyAttribute()
    {
        return $this->role->is_company;
    }

    public function getIsDesignerAttribute()
    {
        return $this->role->is_designer;
    }

    public function scopeCompanies($q)
    {
        return $q->whereHas('role', function ($q) {
            return $q->where('is_company', true);
        });
    }

    public function scopeCompaniesHasServices($q)
    {
        return $q->companies()->whereHas('services', function ($q) {
            return $q;
        }, '>', 0);
    }

    public function scopeDesigners($q)
    {
        return $q->whereHas('role', function ($q) {
            return $q->where('is_designer', true);
        });
    }

    public function scopeSupers($q)
    {
        return $q->whereHas('role', function ($q) {
            return $q->where('is_super', true);
        });
    }

    public function scopeAdmins($q)
    {
        return $q->whereHas('role', function ($q) {
            return $q->where('is_admin', true);
        });
    }

    public function scopeHasProducts($q)
    {
        return $q->whereHas('products', function ($q) {
            return $q->active()->hasAttributes();
        }, '>', 0);
    }

    public function scopeHasServices($q)
    {
        return $q->whereHas('services', function ($q) {
            return $q->active();
        }, '>', 0);
    }

    public function getBgLargeLinkAttribute()
    {
        return asset(env('LARGE') . $this->bg);
    }

    public function getBgMediumLinkAttribute()
    {
        return asset(env('MEDIUM') . $this->bg);
    }

    public function getBgThumbLinkAttribute()
    {
        return asset(env('THUMBNAIL') . $this->bg);
    }

}

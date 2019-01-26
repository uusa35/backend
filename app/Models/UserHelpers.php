<?php

namespace App\Models;

use Carbon\Carbon;

trait UserHelpers
{
    public function getIsSuperAttribute() {
        return $this->role->is_super;
    }

    public function getIsAdminAttribute() {
        return $this->role->is_admin;
    }

    public function getIsCompanyAttribute() {
        return $this->role->is_company;
    }

    public function getIsDesignerAttribute() {
        return $this->role->is_company;
    }

    public function scopeCompanies($q)
    {
        return $q->whereHas('role', function ($q) {
            return $q->where('is_company', true);
        });
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
}

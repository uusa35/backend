<?php

namespace App\Policies;

use App\Models\User;
use App\Brand;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrandPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the brand.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Brand  $brand
     * @return mixed
     */
    public function view(User $user, Brand $brand)
    {
        //
    }

    /**
     * Determine whether the user can create brands.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the brand.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Brand  $brand
     * @return mixed
     */
    public function update(User $user, Brand $brand)
    {
        //
    }

    /**
     * Determine whether the user can delete the brand.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Brand  $brand
     * @return mixed
     */
    public function delete(User $user, Brand $brand)
    {
        //
    }

    /**
     * Determine whether the user can restore the brand.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Brand  $brand
     * @return mixed
     */
    public function restore(User $user, Brand $brand)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the brand.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Brand  $brand
     * @return mixed
     */
    public function forceDelete(User $user, Brand $brand)
    {
        //
    }
}

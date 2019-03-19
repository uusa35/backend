<?php

namespace App\Policies;

use App\Models\User;
use App\Area;
use Illuminate\Auth\Access\HandlesAuthorization;

class AreaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the area.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Area  $area
     * @return mixed
     */
    public function view(User $user, Area $area)
    {
        //
    }

    /**
     * Determine whether the user can create areas.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the area.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Area  $area
     * @return mixed
     */
    public function update(User $user, Area $area)
    {
        //
    }

    /**
     * Determine whether the user can delete the area.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Area  $area
     * @return mixed
     */
    public function delete(User $user, Area $area)
    {
        //
    }

    /**
     * Determine whether the user can restore the area.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Area  $area
     * @return mixed
     */
    public function restore(User $user, Area $area)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the area.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Area  $area
     * @return mixed
     */
    public function forceDelete(User $user, Area $area)
    {
        //
    }
}

<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Privilege;
use Illuminate\Auth\Access\HandlesAuthorization;

class PrivilegePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the privilege.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Privilege  $privilege
     * @return mixed
     */
    public function view(User $user, Privilege $privilege)
    {
        return $user->role->privileges->where('name','privilege')->first()->pivot->{__FUNCTION__};
    }

    /**
     * Determine whether the user can create privileges.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role->privileges->where('name','privilege')->first()->pivot->{__FUNCTION__};
    }

    /**
     * Determine whether the user can update the privilege.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Privilege  $privilege
     * @return mixed
     */
    public function update(User $user, Priv $privilege)
    {
        //
    }

    /**
     * Determine whether the user can delete the privilege.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Privilege  $privilege
     * @return mixed
     */
    public function delete(User $user, Privilege $privilege)
    {
        //
    }

    /**
     * Determine whether the user can restore the privilege.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Privilege  $privilege
     * @return mixed
     */
    public function restore(User $user, Privilege $privilege)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the privilege.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Privilege  $privilege
     * @return mixed
     */
    public function forceDelete(User $user, Privilege $privilege)
    {
        //
    }
}

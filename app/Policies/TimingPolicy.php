<?php

namespace App\Policies;

use App\Models\User;
use App\Timing;
use Illuminate\Auth\Access\HandlesAuthorization;

class TimingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the timing.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Timing  $timing
     * @return mixed
     */
    public function view(User $user, Timing $timing)
    {
        //
    }

    /**
     * Determine whether the user can create timings.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the timing.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Timing  $timing
     * @return mixed
     */
    public function update(User $user, Timing $timing)
    {
        //
    }

    /**
     * Determine whether the user can delete the timing.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Timing  $timing
     * @return mixed
     */
    public function delete(User $user, Timing $timing)
    {
        //
    }

    /**
     * Determine whether the user can restore the timing.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Timing  $timing
     * @return mixed
     */
    public function restore(User $user, Timing $timing)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the timing.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Timing  $timing
     * @return mixed
     */
    public function forceDelete(User $user, Timing $timing)
    {
        //
    }
}

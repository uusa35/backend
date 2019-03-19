<?php

namespace App\Policies;

use App\Models\User;
use App\Currency;
use Illuminate\Auth\Access\HandlesAuthorization;

class CurrencyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the currency.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function view(User $user, Currency $currency)
    {
        //
    }

    /**
     * Determine whether the user can create currencies.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the currency.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function update(User $user, Currency $currency)
    {
        //
    }

    /**
     * Determine whether the user can delete the currency.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function delete(User $user, Currency $currency)
    {
        //
    }

    /**
     * Determine whether the user can restore the currency.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function restore(User $user, Currency $currency)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the currency.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function forceDelete(User $user, Currency $currency)
    {
        //
    }
}

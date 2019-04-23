<?php

namespace App\Policies;

use App\Models\User;
use App\Faq;
use Illuminate\Auth\Access\HandlesAuthorization;

class FaqPolicy
{
    use HandlesAuthorization;
    const MODAL = 'faq';

    /**
     * Determine whether the user can view the faq.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Faq  $faq
     * @return mixed
     */
    public function view(User $user, Faq $faq)
    {
        return $user->role->privileges->where('name', self::MODAL)->first()->pivot->{__FUNCTION__};
    }

    /**
     * Determine whether the user can create faqs.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role->privileges->where('name', self::MODAL)->first()->pivot->{__FUNCTION__};
    }

    /**
     * Determine whether the user can update the faq.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Faq  $faq
     * @return mixed
     */
    public function update(User $user, Faq $faq)
    {
        return $user->role->privileges->where('name', self::MODAL)->first()->pivot->{__FUNCTION__};
    }

    /**
     * Determine whether the user can delete the faq.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Faq  $faq
     * @return mixed
     */
    public function delete(User $user, Faq $faq)
    {
        return $user->role->privileges->where('name', self::MODAL)->first()->pivot->{__FUNCTION__};
    }

    /**
     * Determine whether the user can restore the faq.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Faq  $faq
     * @return mixed
     */
    public function restore(User $user, Faq $faq)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the faq.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Faq  $faq
     * @return mixed
     */
    public function forceDelete(User $user, Faq $faq)
    {
        //
    }
}

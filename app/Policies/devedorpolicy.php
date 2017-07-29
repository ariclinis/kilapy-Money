<?php

namespace App\Policies;

use App\User;
use App\devedorpolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class devedorpolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the devedorpolicy.
     *
     * @param  \App\User  $user
     * @param  \App\devedorpolicy  $devedorpolicy
     * @return mixed
     */
    public function view(User $user, devedorpolicy $devedorpolicy)
    {
        //
    }

    /**
     * Determine whether the user can create devedorpolicies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the devedorpolicy.
     *
     * @param  \App\User  $user
     * @param  \App\devedorpolicy  $devedorpolicy
     * @return mixed
     */
    public function update(User $user, devedorpolicy $devedorpolicy)
    {
        //
    }

    /**
     * Determine whether the user can delete the devedorpolicy.
     *
     * @param  \App\User  $user
     * @param  \App\devedorpolicy  $devedorpolicy
     * @return mixed
     */
    public function delete(User $user, devedorpolicy $devedorpolicy)
    {
        //
    }
}

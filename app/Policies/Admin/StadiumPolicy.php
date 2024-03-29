<?php

namespace App\Policies\Admin;

use App\Models\Stadium;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StadiumPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Stadium $stadium)
    {
        
        return $user->id === $stadium->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role == '21';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Stadium $stadium)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Stadium $stadium)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Stadium $stadium)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Stadium $stadium)
    {
        //
    }
}

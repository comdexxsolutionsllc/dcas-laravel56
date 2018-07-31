<?php

namespace App\Observers;

use App\User;

class UserObserver
{

    /**
     * Handle the user "creating" event.
     *
     * @param  \App\User $user
     *
     * @return void
     */
    public function creating(User $user)
    {
        $user->username = str_replace('-', '.', strtolower($user->slug));
    }

    /**
     * Handle the user "updating" event.
     *
     * @param  \App\User $user
     *
     * @return void
     */
    public function updating(User $user)
    {
        $user->username = str_replace('-', '.', strtolower($user->slug));
    }
}

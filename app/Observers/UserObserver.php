<?php

namespace App\Observers;

use App\User;

class UserObserver
{

    /**
     * Handle the user "created" event.
     *
     * @param  \App\User $user
     *
     * @return void
     */
    public function created(User $user)
    {
        $user->username = str_replace('-', '.', strtolower($user->slug));

        $user->save();
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User $user
     *
     * @return void
     */
    public function updated(User $user)
    {
        $user->username = str_replace('-', '.', strtolower($user->slug));

        $user->save();
    }
}

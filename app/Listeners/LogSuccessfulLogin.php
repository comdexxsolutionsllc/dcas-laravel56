<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Log;

class LogSuccessfulLogin
{

    /**
     * Handle the event.
     *
     * @param  Login $event
     *
     * @return void
     */
    public function handle(Login $event)
    {
        Log::notice("[" . now() . "] {$event->user->email}  successfully logged in.");
    }
}

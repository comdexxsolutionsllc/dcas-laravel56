<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Log;

class LogSuccessfulLogout
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Logout $event
     *
     * @return void
     */
    public function handle(Logout $event)
    {
        Log::notice("[" . now() . "] {$event->user->email}  successfully logged out.");
    }
}

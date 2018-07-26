<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Log;

class LogAuthenticated
{

    /**
     * Handle the event.
     *
     * @param  Authenticated $event
     *
     * @return void
     */
    public function handle(Authenticated $event)
    {
        Log::notice("[" . now() . "] {$event->user->email}  successfully authenticated to the system.");
    }
}

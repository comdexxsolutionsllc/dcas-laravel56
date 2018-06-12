<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Log;

class LogAuthenticated
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
     * @param  Authenticated $event
     * @return void
     */
    public function handle(Authenticated $event)
    {
        Log::info("[" . now() . "] {$event->user->email}  successfully authenticated to the system.");
    }
}

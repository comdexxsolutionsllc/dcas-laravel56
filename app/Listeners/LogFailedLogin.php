<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Failed;
use Log;

class LogFailedLogin
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
     * @param  Failed  $event
     * @return void
     */
    public function handle(Failed $event)
    {
        Log::alert("[" . now() . "] {$event->user->email}  failed to logged in from " . request()->ip());
    }
}

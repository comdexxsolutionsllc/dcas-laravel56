<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Attempting;
use Log;

class LogAuthenticationAttempt
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
     * @param  Attempting $event
     *
     * @return void
     */
    public function handle(Attempting $event)
    {
        Log::alert("[" . now() . "] {$event->credentials['email']}  attempted to authenticate to the system from " . request()->ip());
    }
}

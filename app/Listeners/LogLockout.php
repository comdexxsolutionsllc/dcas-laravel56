<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Lockout;
use Log;

class LogLockout
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
     * @param  Lockout $event
     *
     * @return void
     */
    public function handle(Lockout $event)
    {
        Log::critical("[" . now() . "] Login lockout detected from " . request()->ip());
    }
}

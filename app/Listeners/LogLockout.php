<?php

namespace App\Listeners;

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
     * @return void
     */
    public function handle()
    {
        Log::critical("[" . now() . "] Login lockout detected from " . request()->ip());
    }
}

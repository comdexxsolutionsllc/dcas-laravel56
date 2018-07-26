<?php

namespace App\Listeners;

use Log;

class LogLockout
{

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

<?php

namespace App\Listeners;

use Log;

class LogFailedLogin
{

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
        $email = request()->input('email');

        Log::alert("[" . now() . "] {$email}  failed to logged in from " . request()->ip());
    }
}

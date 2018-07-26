<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Log;

class LogRegisteredUser
{

    /**
     * Handle the event.
     *
     * @param  Registered $event
     *
     * @return void
     */
    public function handle(Registered $event)
    {
        Log::notice("[" . now() . "] {$event->user->email}  successfully registered to the system from " . request()->ip());
    }
}

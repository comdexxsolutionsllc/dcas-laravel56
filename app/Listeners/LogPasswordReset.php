<?php

namespace App\Listeners;

use Illuminate\Auth\Events\PasswordReset;
use Log;

class LogPasswordReset
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
     * @param  PasswordReset  $event
     * @return void
     */
    public function handle(PasswordReset $event)
    {
        Log::notice("[" . now() . "] {$event->user->email}  successfully reset their password to the system from " . request()->ip());
    }
}

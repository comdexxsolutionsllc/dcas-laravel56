<?php

namespace App\Listeners;

use App\Events\EmployeeCreated;
use Illuminate\Support\Facades\Notification;

class ProcessEmployeeRegistration
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
     * @param  EmployeeCreated $event
     *
     * @return void
     */
    public function handle(EmployeeCreated $event)
    {
        foreach ($this->getUsers() as $role) {
            Notification::send($role->user->email, new \App\Notifications\EmployeeCreated($event->employee));
        }
    }

    /**
     * @return \App\Role[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
     */
    protected function getUsers()
    {
        return \App\Role::with('users')->whereName('superadmin')->get();
    }
}

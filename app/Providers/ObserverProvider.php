<?php

namespace App\Providers;

use App\Observers\EmployeeObserver;
use App\Observers\UserObserver;
use App\User;
use DCAS\Roles\Employee;
use Illuminate\Support\ServiceProvider;

class ObserverProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Employee::observe(new EmployeeObserver);
        User::observe(new UserObserver);
    }
}

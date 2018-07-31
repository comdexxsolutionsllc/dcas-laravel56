<?php

namespace App\Observers;

use DCAS\Roles\Employee;

class EmployeeObserver
{

    /**
     * Handle the employee "created" event.
     *
     * @param  \DCAS\Roles\Employee $employee
     *
     * @return void
     */
    public function created(Employee $employee)
    {
        $employee->username = str_replace('-', '.', strtolower($employee->slug));

        $employee->save();
    }

    /**
     * Handle the employee "updated" event.
     *
     * @param  \DCAS\Roles\Employee $employee
     *
     * @return void
     */
    public function updated(Employee $employee)
    {
        $employee->username = str_replace('-', '.', strtolower($employee->slug));

        $employee->save();
    }
}

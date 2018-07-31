<?php

namespace App\Observers;

use DCAS\Roles\Employee;

class EmployeeObserver
{

    /**
     * Handle the employee "creating" event.
     *
     * @param  \DCAS\Roles\Employee $employee
     *
     * @return void
     */
    public function creating(Employee $employee)
    {
        $employee->username = str_replace('-', '.', strtolower($employee->slug));
    }

    /**
     * Handle the employee "updating" event.
     *
     * @param  \DCAS\Roles\Employee $employee
     *
     * @return void
     */
    public function updating(Employee $employee)
    {
        $employee->username = str_replace('-', '.', strtolower($employee->slug));
    }
}

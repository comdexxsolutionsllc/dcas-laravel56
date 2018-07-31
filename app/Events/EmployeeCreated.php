<?php

namespace App\Events;

use DCAS\Roles\Employee;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EmployeeCreated
{

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var \DCAS\Roles\Employee
     */
    public $employee;

    /**
     * Create a new event instance.
     *
     * @param \DCAS\Roles\Employee $employee
     */
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\PrivateChannel
     */
    public function broadcastOn(): PrivateChannel
    {
        return new PrivateChannel('internal.employee');
    }
}

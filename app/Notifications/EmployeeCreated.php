<?php

namespace App\Notifications;

use DCAS\Roles\Employee;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class EmployeeCreated extends Notification
{

    use Queueable;

    /**
     * @var \DCAS\Roles\Employee
     */
    public $employee;

    /**
     * Create a new notification instance.
     *
     * @param \DCAS\Roles\Employee $employee
     */
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via()
    {
        return ['database'];
    }

    /**
     * Get the database representation of the notification.
     *
     * @param  mixed $notifiable
     *
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'name'     => $notifiable->name,
            'email'    => $notifiable->email,
            'username' => $notifiable->username,
        ];
    }
}

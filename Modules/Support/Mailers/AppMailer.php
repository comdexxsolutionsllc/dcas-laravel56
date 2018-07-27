<?php

namespace Modules\Support\Mailers;

use Illuminate\Contracts\Mail\Mailer;
use Modules\Support\Entities\Ticket;

class AppMailer
{

    /**
     * @var \Illuminate\Contracts\Mail\Mailer
     */
    protected $mailer;

    /**
     * @var string
     */
    protected $fromAddress = 'support@supportticket.dev';

    /**
     * @var string
     */
    protected $fromName = 'Support Ticket';

    protected $to;

    protected $subject;

    protected $view;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * AppMailer constructor.
     *
     * @param \Illuminate\Contracts\Mail\Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param                                  $user
     * @param \Modules\Support\Entities\Ticket $ticket
     */
    public function sendTicketInformation($user, Ticket $ticket)
    {
        $this->to = $user->email;
        $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";
        $this->view = 'support::emails.ticket_info';
        $this->data = compact('user', 'ticket');

        return $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function ($message) {
            $message->from($this->fromAddress, $this->fromName)->to($this->to)->subject($this->subject);
        });
    }

    /**
     * @param                                  $ticketOwner
     * @param \Modules\Support\Entities\Ticket $ticket
     */
    public function sendTicketStatusNotification($ticketOwner, Ticket $ticket)
    {
        $this->to = $ticketOwner->email;
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
        $this->view = 'support::emails.ticket_status';
        $this->data = compact('ticketOwner', 'ticket');

        return $this->deliver();
    }

    /**
     * @param                                  $ticketOwner
     * @param                                  $user
     * @param \Modules\Support\Entities\Ticket $ticket
     * @param                                  $comment
     */
    public function sendTicketComments($ticketOwner, $user, Ticket $ticket, $comment)
    {
        $this->to = $ticketOwner->email;
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
        $this->view = 'support::emails.ticket_comments';
        $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');

        return $this->deliver();
    }
}

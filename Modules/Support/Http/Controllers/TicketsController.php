<?php

namespace Modules\Support\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Support\Entities\Category;
use Modules\Support\Entities\Ticket;
use Modules\Support\Mailers\AppMailer;

class TicketsController extends Controller
{

    /**
     * TicketsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        return view('support::tickets.index', [
            'tickets'    => Ticket::paginate(10),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(): View
    {
        return view('support::tickets.create', ['categories' => Category::all()]);
    }

    /**
     * @param $ticket_id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($ticket_id): View
    {
        return view('support::tickets.show', [
            'ticket'   => $ticket = Ticket::with('comments')->where('ticket_id', $ticket_id)->firstOrFail(),
            'category' => $ticket->category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request           $request
     * @param \Modules\Support\Mailers\AppMailer $mailer
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, AppMailer $mailer): RedirectResponse
    {
        $request->validate([
            'title'    => 'required',
            'category' => 'required',
            'priority' => 'required',
            'message'  => 'required',
        ]);

        $ticket = new Ticket([
            'title'       => $request->input('title'),
            'user_id'     => auth()->user()->id,
            'ticket_id'   => strtoupper(str_random(10)),
            'category_id' => $request->input('category'),
            'priority'    => $request->input('priority'),
            'message'     => $request->input('message'),
            'status'      => "Open",
        ]);

        $ticket->save();

        $mailer->sendTicketInformation(auth()->user(), $ticket);

        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
    }

    /**
     * @param                                    $ticket_id
     * @param \Modules\Support\Mailers\AppMailer $mailer
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function close($ticket_id, AppMailer $mailer): RedirectResponse
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status = 'Closed';

        $ticket->save();

        $ticketOwner = $ticket->user;

        $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

        return redirect()->back()->with("status", "The ticket has been closed.");
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userTickets(): View
    {
        return view('support::tickets.user_tickets', [
            'tickets'    => Ticket::where('user_id', auth()->user()->id)->paginate(10),
            'categories' => Category::all(),
        ]);
    }
}

<?php

namespace Modules\Support\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Support\Entities\Comment;
use Modules\Support\Mailers\AppMailer;

class CommentsController extends Controller
{

    /**
     * @param \Illuminate\Http\Request           $request
     * @param \Modules\Support\Mailers\AppMailer $mailer
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postComment(Request $request, AppMailer $mailer): RedirectResponse
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $comment = Comment::create([
            'ticket_id' => $request->input('ticket_id'),
            'user_id'   => auth()->user()->id,
            'comment'   => $request->input('comment'),
        ]);

        // send mail if the user commenting is not the ticket owner
        if ($comment->ticket->user->id !== auth()->user()->id) {
            $mailer->sendTicketComments($comment->ticket->user, auth()->user(), $comment->ticket, $comment);
        }

        return redirect()->back()->with("status", "Your comment has be submitted.");
    }
}

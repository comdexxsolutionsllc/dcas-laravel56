@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Ticket Comments' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST"
                      action="{!! route('ticket_comments.ticket_comments.destroy', $ticketComments->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('ticket_comments.ticket_comments.index') }}" class="btn btn-primary"
                           title="Show All Ticket Comments">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_comments.ticket_comments.create') }}" class="btn btn-success"
                           title="Create New Ticket Comments">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_comments.ticket_comments.edit', $ticketComments->id ) }}"
                           class="btn btn-primary" title="Edit Ticket Comments">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Ticket Comments"
                                onclick="return confirm(&quot;Delete Ticket Comments??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Ticket</dt>
                <dd>{{ optional($ticketComments->ticket)->title }}</dd>
                <dt>User</dt>
                <dd>{{ optional($ticketComments->user)->name }}</dd>
                <dt>Comment Content</dt>
                <dd>{{ $ticketComments->comment_content }}</dd>
                <dt>Deleted At</dt>
                <dd>{{ $ticketComments->deleted_at }}</dd>
                <dt>Created At</dt>
                <dd>{{ $ticketComments->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $ticketComments->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

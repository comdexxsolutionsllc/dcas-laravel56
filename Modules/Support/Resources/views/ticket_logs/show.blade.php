@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Ticket Log' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('ticket_logs.ticket_log.destroy', $ticketLog->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('ticket_logs.ticket_log.index') }}" class="btn btn-primary"
                           title="Show All Ticket Log">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_logs.ticket_log.create') }}" class="btn btn-success"
                           title="Create New Ticket Log">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_logs.ticket_log.edit', $ticketLog->id ) }}" class="btn btn-primary"
                           title="Edit Ticket Log">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Ticket Log"
                                onclick="return confirm(&quot;Delete Ticket Log??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Ticket</dt>
                <dd>{{ optional($ticketLog->ticket)->title }}</dd>
                <dt>User</dt>
                <dd>{{ optional($ticketLog->user)->name }}</dd>
                <dt>Log Content</dt>
                <dd>{{ $ticketLog->log_content }}</dd>
                <dt>Deleted At</dt>
                <dd>{{ $ticketLog->deleted_at }}</dd>
                <dt>Created At</dt>
                <dd>{{ $ticketLog->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $ticketLog->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

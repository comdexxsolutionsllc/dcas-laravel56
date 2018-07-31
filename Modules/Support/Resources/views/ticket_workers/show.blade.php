@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Ticket Workers' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('ticket_workers.ticket_workers.destroy', $ticketWorkers->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('ticket_workers.ticket_workers.index') }}" class="btn btn-primary"
                           title="Show All Ticket Workers">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_workers.ticket_workers.create') }}" class="btn btn-success"
                           title="Create New Ticket Workers">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_workers.ticket_workers.edit', $ticketWorkers->id ) }}"
                           class="btn btn-primary" title="Edit Ticket Workers">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Ticket Workers"
                                onclick="return confirm(&quot;Delete Ticket Workers??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Ticket</dt>
                <dd>{{ optional($ticketWorkers->ticket)->title }}</dd>
                <dt>User</dt>
                <dd>{{ optional($ticketWorkers->user)->name }}</dd>
                <dt>Deleted At</dt>
                <dd>{{ $ticketWorkers->deleted_at }}</dd>
                <dt>Created At</dt>
                <dd>{{ $ticketWorkers->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $ticketWorkers->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

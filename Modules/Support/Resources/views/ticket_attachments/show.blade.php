@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Ticket Attachments' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST"
                      action="{!! route('ticket_attachments.ticket_attachments.destroy', $ticketAttachments->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('ticket_attachments.ticket_attachments.index') }}" class="btn btn-primary"
                           title="Show All Ticket Attachments">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_attachments.ticket_attachments.create') }}" class="btn btn-success"
                           title="Create New Ticket Attachments">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_attachments.ticket_attachments.edit', $ticketAttachments->id ) }}"
                           class="btn btn-primary" title="Edit Ticket Attachments">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Ticket Attachments"
                                onclick="return confirm(&quot;Delete Ticket Attachments??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Ticket</dt>
                <dd>{{ optional($ticketAttachments->ticket)->title }}</dd>
                <dt>File Name</dt>
                <dd>{{ $ticketAttachments->file_name }}</dd>
                <dt>Created At</dt>
                <dd>{{ $ticketAttachments->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $ticketAttachments->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

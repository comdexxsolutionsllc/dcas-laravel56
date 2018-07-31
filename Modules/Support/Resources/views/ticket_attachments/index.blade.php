@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="fa fa-check-circle"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Ticket Attachments</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('ticket_attachments.ticket_attachments.create') }}" class="btn btn-success"
                   title="Create New Ticket Attachments">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($ticketAttachmentsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Ticket Attachments Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th>Ticket</th>
                            <th>File Name</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ticketAttachmentsObjects as $ticketAttachments)
                            <tr>
                                <td>{{ optional($ticketAttachments->ticket)->title }}</td>
                                <td>{{ $ticketAttachments->file_name }}</td>

                                <td>

                                    <form method="POST"
                                          action="{!! route('ticket_attachments.ticket_attachments.destroy', $ticketAttachments->id) !!}"
                                          accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('ticket_attachments.ticket_attachments.show', $ticketAttachments->id ) }}"
                                               class="btn btn-info" title="Show Ticket Attachments">
                                                <span class="fa fa-folder-open" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('ticket_attachments.ticket_attachments.edit', $ticketAttachments->id ) }}"
                                               class="btn btn-primary" title="Edit Ticket Attachments">
                                                <span class="fa fa-pencil" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger"
                                                    title="Delete Ticket Attachments"
                                                    onclick="return confirm(&quot;Delete Ticket Attachments?&quot;)">
                                                <span class="fa fa-trash" aria-hidden="true"></span>
                                            </button>
                                        </div>

                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer">
                {!! $ticketAttachmentsObjects->render() !!}
            </div>

        @endif

    </div>
@endsection

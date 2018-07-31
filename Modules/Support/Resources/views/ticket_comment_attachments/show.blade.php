@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Ticket Comment Attachments' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST"
                      action="{!! route('ticket_comment_attachments.ticket_comment_attachments.destroy', $ticketCommentAttachments->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('ticket_comment_attachments.ticket_comment_attachments.index') }}"
                           class="btn btn-primary" title="Show All Ticket Comment Attachments">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_comment_attachments.ticket_comment_attachments.create') }}"
                           class="btn btn-success" title="Create New Ticket Comment Attachments">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('ticket_comment_attachments.ticket_comment_attachments.edit', $ticketCommentAttachments->id ) }}"
                           class="btn btn-primary" title="Edit Ticket Comment Attachments">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Ticket Comment Attachments"
                                onclick="return confirm(&quot;Delete Ticket Comment Attachments??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Comment</dt>
                <dd>{{ optional($ticketCommentAttachments->comment)->comment }}</dd>
                <dt>File Name</dt>
                <dd>{{ $ticketCommentAttachments->file_name }}</dd>
                <dt>Created At</dt>
                <dd>{{ $ticketCommentAttachments->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $ticketCommentAttachments->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

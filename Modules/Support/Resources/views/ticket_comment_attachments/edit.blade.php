@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Ticket Comment Attachments' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('ticket_comment_attachments.ticket_comment_attachments.index') }}"
                   class="btn btn-primary" title="Show All Ticket Comment Attachments">
                    <span class="fa fa-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('ticket_comment_attachments.ticket_comment_attachments.create') }}"
                   class="btn btn-success" title="Create New Ticket Comment Attachments">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>

            </div>
        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST"
                  action="{{ route('ticket_comment_attachments.ticket_comment_attachments.update', $ticketCommentAttachments->id) }}"
                  id="edit_ticket_comment_attachments_form" name="edit_ticket_comment_attachments_form"
                  accept-charset="UTF-8" class="form-horizontal">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PUT">
                @include ('ticket_comment_attachments.modules.support.resources.views.form', [
                                            'ticketCommentAttachments' => $ticketCommentAttachments,
                                          ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Ticket Comment Attachments</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('ticket_comment_attachments.ticket_comment_attachments.index') }}"
                   class="btn btn-primary" title="Show All Ticket Comment Attachments">
                    <span class="fa fa-th-list" aria-hidden="true"></span>
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

            <form method="POST" action="{{ route('ticket_comment_attachments.ticket_comment_attachments.store') }}"
                  accept-charset="UTF-8" id="create_ticket_comment_attachments_form"
                  name="create_ticket_comment_attachments_form" class="form-horizontal">
                {{ csrf_field() }}
                @include ('ticket_comment_attachments.modules.support.resources.views.form', [
                                            'ticketCommentAttachments' => null,
                                          ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection



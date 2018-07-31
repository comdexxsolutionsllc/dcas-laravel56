@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Comment' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('comments.comment.destroy', $comment->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('comments.comment.index') }}" class="btn btn-primary"
                           title="Show All Comment">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('comments.comment.create') }}" class="btn btn-success"
                           title="Create New Comment">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('comments.comment.edit', $comment->id ) }}" class="btn btn-primary"
                           title="Edit Comment">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Comment"
                                onclick="return confirm(&quot;Delete Comment??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Ticket</dt>
                <dd>{{ optional($comment->ticket)->id }}</dd>
                <dt>User</dt>
                <dd>{{ optional($comment->user)->name }}</dd>
                <dt>Comment</dt>
                <dd>{{ $comment->comment }}</dd>
                <dt>Created At</dt>
                <dd>{{ $comment->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $comment->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

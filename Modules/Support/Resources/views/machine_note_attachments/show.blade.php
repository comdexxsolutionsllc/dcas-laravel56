@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Machine Note Attachments' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST"
                      action="{!! route('machine_note_attachments.machine_note_attachments.destroy', $machineNoteAttachments->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('machine_note_attachments.machine_note_attachments.index') }}"
                           class="btn btn-primary" title="Show All Machine Note Attachments">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('machine_note_attachments.machine_note_attachments.create') }}"
                           class="btn btn-success" title="Create New Machine Note Attachments">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('machine_note_attachments.machine_note_attachments.edit', $machineNoteAttachments->id ) }}"
                           class="btn btn-primary" title="Edit Machine Note Attachments">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Machine Note Attachments"
                                onclick="return confirm(&quot;Delete Machine Note Attachments??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Note</dt>
                <dd>{{ optional($machineNoteAttachments->note)->id }}</dd>
                <dt>File Name</dt>
                <dd>{{ $machineNoteAttachments->file_name }}</dd>
                <dt>Created At</dt>
                <dd>{{ $machineNoteAttachments->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $machineNoteAttachments->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Machine Notes' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('machine_notes.machine_notes.destroy', $machineNotes->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('machine_notes.machine_notes.index') }}" class="btn btn-primary"
                           title="Show All Machine Notes">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('machine_notes.machine_notes.create') }}" class="btn btn-success"
                           title="Create New Machine Notes">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('machine_notes.machine_notes.edit', $machineNotes->id ) }}"
                           class="btn btn-primary" title="Edit Machine Notes">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Machine Notes"
                                onclick="return confirm(&quot;Delete Machine Notes??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Machine</dt>
                <dd>{{ optional($machineNotes->machine)->machine_name }}</dd>
                <dt>Note Content</dt>
                <dd>{{ $machineNotes->note_content }}</dd>
                <dt>Deleted At</dt>
                <dd>{{ $machineNotes->deleted_at }}</dd>
                <dt>Created At</dt>
                <dd>{{ $machineNotes->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $machineNotes->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

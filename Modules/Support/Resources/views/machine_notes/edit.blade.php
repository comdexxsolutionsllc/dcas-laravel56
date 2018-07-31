@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Machine Notes' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('machine_notes.machine_notes.index') }}" class="btn btn-primary"
                   title="Show All Machine Notes">
                    <span class="fa fa-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('machine_notes.machine_notes.create') }}" class="btn btn-success"
                   title="Create New Machine Notes">
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

            <form method="POST" action="{{ route('machine_notes.machine_notes.update', $machineNotes->id) }}"
                  id="edit_machine_notes_form" name="edit_machine_notes_form" accept-charset="UTF-8"
                  class="form-horizontal">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PUT">
                @include ('machine_notes.modules.support.resources.views.form', [
                                            'machineNotes' => $machineNotes,
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

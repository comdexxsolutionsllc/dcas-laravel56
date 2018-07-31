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
                <h4 class="mt-5 mb-5">Machines</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('machines.machine.create') }}" class="btn btn-success" title="Create New Machine">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($machines) == 0)
            <div class="panel-body text-center">
                <h4>No Machines Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th>Type</th>
                            <th>User</th>
                            <th>Location</th>
                            <th>Machine Name</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($machines as $machine)
                            <tr>
                                <td>{{ optional($machine->type)->id }}</td>
                                <td>{{ optional($machine->user)->name }}</td>
                                <td>{{ optional($machine->location)->location_name }}</td>
                                <td>{{ $machine->machine_name }}</td>

                                <td>

                                    <form method="POST" action="{!! route('machines.machine.destroy', $machine->id) !!}"
                                          accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('machines.machine.show', $machine->id ) }}"
                                               class="btn btn-info" title="Show Machine">
                                                <span class="fa fa-folder-open" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('machines.machine.edit', $machine->id ) }}"
                                               class="btn btn-primary" title="Edit Machine">
                                                <span class="fa fa-pencil" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Machine"
                                                    onclick="return confirm(&quot;Delete Machine?&quot;)">
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
                {!! $machines->render() !!}
            </div>

        @endif

    </div>
@endsection

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
                <h4 class="mt-5 mb-5">Machine Types</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('machine_types.machine_type.create') }}" class="btn btn-success"
                   title="Create New Machine Type">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($machineTypes) == 0)
            <div class="panel-body text-center">
                <h4>No Machine Types Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th>Type Name</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($machineTypes as $machineType)
                            <tr>
                                <td>{{ $machineType->type_name }}</td>

                                <td>

                                    <form method="POST"
                                          action="{!! route('machine_types.machine_type.destroy', $machineType->id) !!}"
                                          accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('machine_types.machine_type.show', $machineType->id ) }}"
                                               class="btn btn-info" title="Show Machine Type">
                                                <span class="fa fa-folder-open" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('machine_types.machine_type.edit', $machineType->id ) }}"
                                               class="btn btn-primary" title="Edit Machine Type">
                                                <span class="fa fa-pencil" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Machine Type"
                                                    onclick="return confirm(&quot;Delete Machine Type?&quot;)">
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
                {!! $machineTypes->render() !!}
            </div>

        @endif

    </div>
@endsection

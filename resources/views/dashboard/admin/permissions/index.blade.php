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
                <h4 class="mt-5 mb-5">Permissions</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('permissions.permission.create') }}" class="btn btn-success"
                   title="Create New Permission">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($permissions) == 0)
            <div class="panel-body text-center">
                <h4>No Permissions Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Guard Name</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->guard_name }}</td>

                                <td>

                                    <form method="POST"
                                          action="{!! route('permissions.permission.destroy', $permission->id) !!}"
                                          accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('permissions.permission.show', $permission->id ) }}"
                                               class="btn btn-info" title="Show Permission">
                                                <span class="fa fa-folder-open" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('permissions.permission.edit', $permission->id ) }}"
                                               class="btn btn-primary" title="Edit Permission">
                                                <span class="fa fa-pencil" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Permission"
                                                    onclick="return confirm(&quot;Delete Permission?&quot;)">
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
                {!! $permissions->render() !!}
            </div>

        @endif

    </div>
@endsection

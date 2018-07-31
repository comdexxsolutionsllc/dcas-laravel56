@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($permission->name) ? $permission->name : 'Permission' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('permissions.permission.destroy', $permission->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('permissions.permission.index') }}" class="btn btn-primary"
                           title="Show All Permission">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('permissions.permission.create') }}" class="btn btn-success"
                           title="Create New Permission">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('permissions.permission.edit', $permission->id ) }}" class="btn btn-primary"
                           title="Edit Permission">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Permission"
                                onclick="return confirm(&quot;Delete Permission??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Name</dt>
                <dd>{{ $permission->name }}</dd>
                <dt>Guard Name</dt>
                <dd>{{ $permission->guard_name }}</dd>
                <dt>Created At</dt>
                <dd>{{ $permission->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $permission->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

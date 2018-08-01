@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($role->name) ? $role->name : 'Role' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('roles.role.destroy', $role->id) !!}" accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('roles.role.index') }}" class="btn btn-primary" title="Show All Role">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('roles.role.create') }}" class="btn btn-success" title="Create New Role">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('roles.role.edit', $role->id ) }}" class="btn btn-primary" title="Edit Role">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Role"
                                onclick="return confirm(&quot;Delete Role??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Name</dt>
                <dd>{{ $role->name }}</dd>
                <dt>Guard Name</dt>
                <dd>{{ $role->guard_name }}</dd>
                <dt>Created At</dt>
                <dd>{{ $role->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $role->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

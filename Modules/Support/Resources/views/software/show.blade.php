@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Software' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('software.software.destroy', $software->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('software.software.index') }}" class="btn btn-primary"
                           title="Show All Software">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('software.software.create') }}" class="btn btn-success"
                           title="Create New Software">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('software.software.edit', $software->id ) }}" class="btn btn-primary"
                           title="Edit Software">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Software"
                                onclick="return confirm(&quot;Delete Software??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Software Name</dt>
                <dd>{{ $software->software_name }}</dd>
                <dt>Software Key</dt>
                <dd>{{ $software->software_key }}</dd>
                <dt>Deleted At</dt>
                <dd>{{ $software->deleted_at }}</dd>
                <dt>Created At</dt>
                <dd>{{ $software->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $software->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

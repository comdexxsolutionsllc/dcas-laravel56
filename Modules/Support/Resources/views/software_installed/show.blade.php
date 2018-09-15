@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Software Installed' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST"
                      action="{!! route('software_installeds.software_installed.destroy', $softwareInstalled->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('software_installeds.software_installed.index') }}" class="btn btn-primary"
                           title="Show All Software Installed">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('software_installeds.software_installed.create') }}" class="btn btn-success"
                           title="Create New Software Installed">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('software_installeds.software_installed.edit', $softwareInstalled->id ) }}"
                           class="btn btn-primary" title="Edit Software Installed">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Software Installed"
                                onclick="return confirm(&quot;Delete Software Installed??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Software</dt>
                <dd>{{ optional($softwareInstalled->software)->software_name }}</dd>
                <dt>Machine</dt>
                <dd>{{ optional($softwareInstalled->machine)->machine_name }}</dd>
                <dt>Deleted At</dt>
                <dd>{{ $softwareInstalled->deleted_at }}</dd>
                <dt>Created At</dt>
                <dd>{{ $softwareInstalled->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $softwareInstalled->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

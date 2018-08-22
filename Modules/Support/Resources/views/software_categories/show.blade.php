@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Software Category' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST"
                      action="{!! route('software_categories.software_category.destroy', $softwareCategory->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('software_categories.software_category.index') }}" class="btn btn-primary"
                           title="Show All Software Category">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('software_categories.software_category.create') }}" class="btn btn-success"
                           title="Create New Software Category">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('software_categories.software_category.edit', $softwareCategory->id ) }}"
                           class="btn btn-primary" title="Edit Software Category">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Software Category"
                                onclick="return confirm(&quot;Delete Software Category??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Category Name</dt>
                <dd>{{ $softwareCategory->category_name }}</dd>
                <dt>Deleted At</dt>
                <dd>{{ $softwareCategory->deleted_at }}</dd>
                <dt>Created At</dt>
                <dd>{{ $softwareCategory->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $softwareCategory->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

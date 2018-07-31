@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($category->name) ? $category->name : 'Category' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('categories.category.destroy', $category->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('categories.category.index') }}" class="btn btn-primary"
                           title="Show All Category">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('categories.category.create') }}" class="btn btn-success"
                           title="Create New Category">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('categories.category.edit', $category->id ) }}" class="btn btn-primary"
                           title="Edit Category">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Category"
                                onclick="return confirm(&quot;Delete Category??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Name</dt>
                <dd>{{ $category->name }}</dd>
                <dt>Created At</dt>
                <dd>{{ $category->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $category->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

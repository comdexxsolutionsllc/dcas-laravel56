@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($user->name) ? $user->name : 'User' }}</h4>
        </span>

            <div class="pull-right">
                <form method="POST" action="{!! route('users.user.destroy', $user->id) !!}" accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('users.user.index') }}" class="btn btn-primary" title="Show All User">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('users.user.create') }}" class="btn btn-success" title="Create New User">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('users.user.edit', $user->id ) }}" class="btn btn-primary" title="Edit User">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete User"
                                onclick="return confirm(&quot;Delete User??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Name</dt>
                <dd>{{ $user->name }} (<b>{{ $user->slug }}</b>)</dd>

                <dt>Email</dt>
                <dd>{{ $user->email }}</dd>

                <dt>Card Brand</dt>
                <dd>{{ $user->card_brand ?? 'No Credit Card Found' }}</dd>

                <dt>Card Last Four</dt>
                <dd>{{ $user->card_last_four ?? 'No Credit Card Found' }}</dd>

                <dt>Trial Ends At</dt>
                <dd>{{ $user->trial_ends_at ?? 'No Trial Active' }}</dd>

                @if(!is_null($user->deleted_at))
                    <dt>Deleted At</dt>
                    <dd>{{ $user->deleted_at }}</dd>
                @endif

                <dt>Created At</dt>
                <dd>{{ $user->created_at }}
                    (<b>{{ $user->createdAtForHumans }}</b>)
                </dd>

                <dt>Updated At</dt>
                <dd>{{ $user->updated_at }}
                    (<b>{{ $user->updatedAtForHumans }}</b>)
                </dd>
            </dl>
        </div>
    </div>
@endsection

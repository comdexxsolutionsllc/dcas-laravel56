@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Profile' }}</h4>
        </span>

            <div class="pull-right">

                <form method="POST" action="{!! route('profiles.profile.destroy', $profile->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('profiles.profile.index') }}" class="btn btn-primary"
                           title="Show All Profile">
                            <span class="fa fa-th-list" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('profiles.profile.create') }}" class="btn btn-success"
                           title="Create New Profile">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>

                        <a href="{{ route('profiles.profile.edit', $profile->id ) }}" class="btn btn-primary"
                           title="Edit Profile">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Profile"
                                onclick="return confirm(&quot;Delete Profile??&quot;)">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>User</dt>
                <dd>{{ optional($profile->user)->id }}</dd>
                <dt>Address 1</dt>
                <dd>{{ $profile->address_1 }}</dd>
                <dt>Address 2</dt>
                <dd>{{ $profile->address_2 }}</dd>
                <dt>City</dt>
                <dd>{{ $profile->city }}</dd>
                <dt>State</dt>
                <dd>{{ $profile->state }}</dd>
                <dt>Postal Code</dt>
                <dd>{{ $profile->postal_code }}</dd>
                <dt>Country</dt>
                <dd>{{ $profile->country }}</dd>
                <dt>Country Code</dt>
                <dd>{{ $profile->country_code }}</dd>
                <dt>Npa Nxx Suffix</dt>
                <dd>{{ $profile->npa_nxx_suffix }}</dd>
                <dt>Phone Type</dt>
                <dd>{{ $profile->phone_type }}</dd>
                <dt>Deleted At</dt>
                <dd>{{ $profile->deleted_at }}</dd>
                <dt>Created At</dt>
                <dd>{{ $profile->created_at }}</dd>
                <dt>Updated At</dt>
                <dd>{{ $profile->updated_at }}</dd>

            </dl>

        </div>
    </div>

@endsection

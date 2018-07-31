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
                <h4 class="mt-5 mb-5">Profiles</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('profiles.profile.create') }}" class="btn btn-success" title="Create New Profile">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($profiles) == 0)
            <div class="panel-body text-center">
                <h4>No Profiles Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Address 1</th>
                            <th>Address 2</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                            <th>Country Code</th>
                            <th>Npa Nxx Suffix</th>
                            <th>Phone Type</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($profiles as $profile)
                            <tr>
                                <td>{{ optional($profile->user)->id }}</td>
                                <td>{{ $profile->address_1 }}</td>
                                <td>{{ $profile->address_2 }}</td>
                                <td>{{ $profile->city }}</td>
                                <td>{{ $profile->state }}</td>
                                <td>{{ $profile->postal_code }}</td>
                                <td>{{ $profile->country }}</td>
                                <td>{{ $profile->country_code }}</td>
                                <td>{{ $profile->npa_nxx_suffix }}</td>
                                <td>{{ $profile->phone_type }}</td>

                                <td>

                                    <form method="POST" action="{!! route('profiles.profile.destroy', $profile->id) !!}"
                                          accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('profiles.profile.show', $profile->id ) }}"
                                               class="btn btn-info" title="Show Profile">
                                                <span class="fa fa-folder-open" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('profiles.profile.edit', $profile->id ) }}"
                                               class="btn btn-primary" title="Edit Profile">
                                                <span class="fa fa-pencil" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Profile"
                                                    onclick="return confirm(&quot;Delete Profile?&quot;)">
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
                {!! $profiles->render() !!}
            </div>

        @endif

    </div>
@endsection

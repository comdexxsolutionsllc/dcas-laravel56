@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($subscription->name) ? $subscription->name : 'Subscription' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('subscriptions.subscription.destroy', $subscription->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('subscriptions.subscription.index') }}" class="btn btn-primary" title="Show All Subscription">
                        <span class="fa fa-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('subscriptions.subscription.create') }}" class="btn btn-success" title="Create New Subscription">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('subscriptions.subscription.edit', $subscription->id ) }}" class="btn btn-primary" title="Edit Subscription">
                        <span class="fa fa-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Subscription" onclick="return confirm(&quot;Delete Subscription??&quot;)">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>User</dt>
            <dd>{{ optional($subscription->user)->name }}</dd>
            <dt>Name</dt>
            <dd>{{ $subscription->name }}</dd>
            <dt>Stripe</dt>
            <dd>{{ optional($subscription->stripe)->id }}</dd>
            <dt>Stripe Plan</dt>
            <dd>{{ $subscription->stripe_plan }}</dd>
            <dt>Quantity</dt>
            <dd>{{ $subscription->quantity }}</dd>
            <dt>Trial Ends At</dt>
            <dd>{{ $subscription->trial_ends_at }}</dd>
            <dt>Ends At</dt>
            <dd>{{ $subscription->ends_at }}</dd>
            <dt>Created At</dt>
            <dd>{{ $subscription->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $subscription->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection
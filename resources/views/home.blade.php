@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        {{--<portal-target name="destination"></portal-target>--}}

        <div class="flex flex-wrap justify-center">
            <div class="md:w-2/3 pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-grey-light">
                    <div class="py-3 px-6 mb-0 bg-grey-lighter border-b-1 border-grey-light text-grey-darkest">
                        Dashboard
                    </div>

                    <div class="flex-auto p-6">
                        @if (session('status'))
                            <div class="relative px-3 py-3 mb-4 border rounded text-green-darker border-green-dark bg-green-lighter">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<notifier userid="{{ auth()->user()->id }}"></notifier>--}}

    {{--<div id="router">--}}
        {{--<h1>Redirect</h1>--}}
        {{--<ul>--}}
            {{--<li>--}}
                {{--<router-link to="/relative-redirect">--}}
                    {{--/relative-redirect (redirects to /foo)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/relative-redirect?foo=bar">--}}
                    {{--/relative-redirect?foo=bar (redirects to /foo?foo=bar)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/absolute-redirect">--}}
                    {{--/absolute-redirect (redirects to /bar)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/dynamic-redirect">--}}
                    {{--/dynamic-redirect (redirects to /bar)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/dynamic-redirect/123">--}}
                    {{--/dynamic-redirect/123 (redirects to /with-params/123)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/dynamic-redirect?to=foo">--}}
                    {{--/dynamic-redirect?to=foo (redirects to /foo)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/dynamic-redirect#baz">--}}
                    {{--/dynamic-redirect#baz (redirects to /baz)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/named-redirect">--}}
                    {{--/named-redirect (redirects to /baz)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/redirect-with-params/123">--}}
                    {{--/redirect-with-params/123 (redirects to /with-params/123)--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/foobar">--}}
                    {{--/foobar--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/FooBar">--}}
                    {{--/FooBar--}}
                {{--</router-link>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<router-link to="/not-found">--}}
                    {{--/not-found (redirects to /)--}}
                {{--</router-link>--}}
            {{--</li>--}}
        {{--</ul>--}}
        {{--<router-view class="view"></router-view>--}}
    {{--</div>--}}
@endsection

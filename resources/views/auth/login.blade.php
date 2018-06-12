@extends('layouts.app')

@section('content')
    <div class="container mx-auto h-full font-serif flex justify-center items-center">
        <div class="w-2/3">
            <h1 class="font-hairline mb-6 text-center"
                style="font-family: 'News Cycle', sans-serif">{{ __('Login') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Username</label>
                        <input type="text"
                               class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="username" autocomplete="false" autofocus>
                    </div>

                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Password</label>
                        <input type="password"
                               class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow"
                               name="password"
                               placeholder="password">
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-teal-dark hover:bg-teal text-white font-bold py-2 px-4 rounded">
                            Login
                        </button>

                        <a class="no-underline inline-block align-baseline font-bold text-sm text-blue hover:text-blue-dark float-right"
                           href="{{ route('password.request') }}">
                            Forgot Password
                        </a>
                    </div>

                </div>
                <div class="text-center">
                    <p class="text-grey-dark text-sm">Don't have an account? <a href="{{ route('register') }}"
                                                                                class="no-underline text-blue font-bold">Register</a>.
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection

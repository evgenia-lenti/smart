@extends('layouts.app')

@section('content')
<!--
<div class="mt-10 px-8 mb-20">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="">
                <h3 class="text-lg font-medium leading-6 text-gray-900 mb-12">{{ __('Login') }}</h3>
            </div>
        </div>
        <div class="md:col-span-2 max-w-md">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>

                    <div class="mt-2">
                        <input id="email" type="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="py-3">
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>

                    <div class="mt-2">
                        <input id="password" type="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <div class="col-md-6 offset-md-4">
                        <div class="">
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="">
                        <button type="submit" class="mt-10 mr-4 inline-flex bg-primary-500 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-500" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
    </div>
</div>
-->

<div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-24 w-auto" src="/images/logo.png" alt="smart logo image">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Log in
            </h2>
<!--            <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    start your 14-day free trial
                </a>
            </p>-->
        </div>
        <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required class="appearance-none rounded-none relative
                    block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md
                    focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" @error('email') is-invalid @enderror placeholder="Email address">

                    @error('email')
                    <span class="" role="alert">
                        <small class="text-red-500 text-sm">{{ $message }}</small>
                    </span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block
                    w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md
                    focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" @error('password') is-invalid @enderror placeholder="Password">

                    @error('password')
                    <span class="" role="alert">
                        <small class="text-red-500 text-sm">{{ $message }}</small>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-gray-500 focus:ring-gray-500 border-gray-300 rounded" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-500" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-500 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                      <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <!-- Heroicon name: lock-closed -->
                        <svg class="h-5 w-5 text-gray-300 group-hover:text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    Log in
                </button>
            </div>
        </form>
    </div>
</div>


@endsection

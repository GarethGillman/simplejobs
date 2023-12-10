<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

<div id="login-wrapper">
    <div id="form-wrapper">

        <div id="logo">
            <x-application-logo />
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="input-wrapper">
                <label for="email">Your Email</label>
                <input id="email" type="email" name="email" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-wrapper">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="input-wrapper row">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" id="forgot-pw-link">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>                

            <button type="submit">
                {{ __('Log in') }}
            </button>
        </form>
    </ddiv>
</div>

</body>
</html>

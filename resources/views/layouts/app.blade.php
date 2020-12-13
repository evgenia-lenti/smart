<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>window.appUrl = '{{ config("app.url") }}';</script>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
<div id="app">

    <nav-bar></nav-bar>

    <main>
        @yield('content')
    </main>

    <footer-component/>


</div>
</body>
</html>

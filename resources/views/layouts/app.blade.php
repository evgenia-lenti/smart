<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @routes
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>window.appUrl = '{{ config("app.url") }}'</script>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <script>
        window.smart = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'user' => (Auth::user()) ? Auth::user() : '',
            'appURL' => config('app.url'),
        ]); ?>
    </script>

</head>
    <body>
        <div id="app">

            @if (!isset($navbar) || $navbar)
                <nav-bar></nav-bar>
            @endif


            <main>
                @yield('content')
            </main>

            @if (!isset($footer) || $footer)
                    <footer-component></footer-component>
            @endif



        </div>
    </body>
</html>

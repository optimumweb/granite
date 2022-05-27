<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('site.name') }}</title>

        <link rel="stylesheet" href="{{ theme_asset('css/theme.css') }}">

        <script src="{{ theme_asset('js/theme.js') }}" defer></script>
    </head>
    <body>
        <header id="site-header">
            <h1>{{ config('site.name') }}</h1>
        </header>

        <main id="site-content">
            @yield('content')
        </main>
    </body>
</html>

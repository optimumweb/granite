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
        <header id="site-header" class="hero is-primary">
            <div class="hero-body">
                <div class="columns">
                    <div class="column is-4">

                    </div>

                    <div class="column is-4 has-text-centered">
                        <h1 id="site-name" class="title">
                            {{ config('site.name') }}
                        </h1>

                        <h2 id="site-description" class="subtitle">
                            {{ config('site.description') }}
                        </h2>
                    </div>

                    <div class="column is-4">

                    </div>
                </div>
            </div>
        </header>

        <main id="site-content">
            @yield('content')
        </main>

        <footer id="site-footer" class="footer">
            <div class="content has-text-centered">
                <p id="copy">&copy; {{ config('site.name') }} {{ now()->format('Y') }}</p>
            </div>
        </footer>
    </body>
</html>

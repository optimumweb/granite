<!DOCTYPE html>
<html lang="{{ $site->locale->name }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $site->name }}</title>

        <link rel="stylesheet" href="{{ $site->theme->asset('css/theme.css') }}">

        <script src="{{ $site->theme->asset('js/theme.js') }}" defer></script>
    </head>
    <body>
        <header id="site-header" class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 id="site-name" class="title">
                                    <a href="{{ $site->home() }}">
                                        {{ $site->name }}
                                    </a>
                                </h1>

                                <h2 id="site-description" class="subtitle">
                                    {{ $site->description }}
                                </h2>
                            </div>
                        </div>

                        <div class="level-right">
                            <div class="level-item">
                                {!! $site->menu('primary')->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main id="site-content">
            @yield('content')
        </main>

        <footer id="site-footer" class="footer">
            <div class="content has-text-centered">
                <p id="copy">&copy; {{ $site->name }} {{ now()->format('Y') }}</p>
            </div>
        </footer>
    </body>
</html>

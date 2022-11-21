<!DOCTYPE html>
<html lang="{{ $site->locale->name }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $meta['title'] ?? $site->description }} - {{ $site->name }}</title>

        @foreach (['description', 'keywords', 'author'] as $metaName)
            @isset($meta[$metaName])
                <meta name="{{ $metaName }}" content="{{ $meta[$metaName] }}" />
            @endisset
        @endforeach

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ $site->theme->asset('css/theme.css') }}">

        @if ($fontawesome = $site->theme->config('fontawesome'))
            <script src="https://kit.fontawesome.com/{{ $fontawesome }}.js" crossorigin="anonymous"></script>
        @endif

        <script src="{{ $site->theme->asset('js/theme.js') }}" defer></script>
    </head>
    <body>
        <header id="site-header" class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <div id="site-title">
                                    <h1 id="site-name" class="title">
                                        <a href="{{ $site->home() }}">
                                            {{ $site->name }}
                                        </a>
                                    </h1>

                                    <h2 id="site-description">
                                        {{ $site->description }}
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="level-right">
                            <div class="level-item">
                                {!! $site->menu('primary') !!}
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

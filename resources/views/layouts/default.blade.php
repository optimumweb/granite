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

        @if ($favicon = $site->theme->setting('favicon'))
            <link rel="icon" href="{{ storageUrl($favicon) }}" />
        @endif

        @if ($fontFamily = $site->theme->setting('font_family'))
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family={{ $fontFamily }}:wght@300;400;700&display=swap" rel="stylesheet">
        @endif

        <style>
            :root {
                --family-sans-serif: {{ $fontFamily }}, sans-serif;
            }
        </style>

        <link rel="stylesheet" href="{{ $site->theme->asset('css/theme.css') }}">

        @if ($fontawesome = $site->theme->config('fontawesome'))
            <script src="https://kit.fontawesome.com/{{ $fontawesome }}.js" crossorigin="anonymous"></script>
        @endif

        <script src="{{ $site->theme->asset('js/theme.js') }}" defer></script>

        {!! $site->blocks('header_code')->get()->render() !!}
    </head>
    <body>
        <header id="site-header" class="section">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-3 has-text-centered-mobile">
                        <hgroup id="site-title">
                            @if ($siteLogo = $site->theme->setting('logo'))
                                <h1 id="site-logo">
                                    <a href="{{ $site->path() }}">
                                        <img
                                            src="{{ storageUrl($siteLogo) }}"
                                            alt="{{ $site->name }} - {{ $site->description }}"
                                        />
                                    </a>
                                </h1>
                            @else
                                <h1 id="site-name" class="title">
                                    <a href="{{ $site->path() }}">
                                        {{ $site->name }}
                                    </a>
                                </h1>

                                <h2 id="site-description">
                                    {{ $site->description }}
                                </h2>
                            @endif
                        </hgroup>
                    </div>

                    <div class="column is-9">
                        <div class="level">
                            <div class="level-left"></div>

                            <div class="level-right">
                                <div class="level-item">
                                    {!! $site->menu('primary') !!}
                                </div>
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
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p id="copy">&copy; {{ $site->name }} {{ now()->format('Y') }}</p>
                        </div>
                    </div>

                    <div class="level-right">
                        <div class="level-item">
                            {!! $site->menu('footer') !!}
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {!! $site->blocks('footer_code')->get()->render() !!}
    </body>
</html>

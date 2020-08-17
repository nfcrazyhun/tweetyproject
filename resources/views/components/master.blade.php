<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container">
        <section class="py-4 site-header">
            <header>
                    <a href="{{route('tweets.index')}}">
                        <div class="d-flex align-items-center">
                            <img
                                class="logo mr-1"
                                src="{{asset('images/logo.svg')}}"
                                alt="Tweety"
                            >
                            <div class="logo-text">Tweety</div>
                        </div>

                    </a>
            </header>
        </section>

        {{ $slot }}
    </div>

    <script src="http://unpkg.com/turbolinks"></script>
</body>
</html>

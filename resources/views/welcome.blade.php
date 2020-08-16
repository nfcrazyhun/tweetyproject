<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="home">
<section class="home">

    <div class="container">
        <div class="row">
            <div class="mx-auto full-height d-flex align-items-center">

                <div class="d-block">
                    <div class="d-flex align-items-center mb-2">
                        <img class="mr-2 home-logo" alt="logo" src="{{ asset('images/logo.svg') }}">
                        <div class="display-1">Tweety</div>
                    </div>

                    <div class="d-flex justify-content-around h2">
                        @auth
                            <a href="{{ url('/tweets') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
</body>
</html>

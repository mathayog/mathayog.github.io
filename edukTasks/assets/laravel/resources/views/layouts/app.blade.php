<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nav-bar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/welcome-page.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/selection-page.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/placement-page.css')}}">

    <!-- Scripts -->
</head>

<body>
    <div id="app">
        <nav class="navbar">
            <div class="navContainer">
                <div class="logoSection">
                    <img src="{{ asset('assets/images/svgs/mathayog_logo.svg') }}" alt="mathayog icon" id="logoIcon">
                    <p>Mathayog</p>
                </div>
                @if(Route::currentRouteName() !== 'testWelcome')
                <div class="userSection">
                    <p>{{$user->firstname . ' ' . $user->lastname}}</p>
                    <img src="{{ asset('assets/images/logos/userIcon.png') }}" alt="user icon" id="userIcon">
                </div>
                @endif
                <!-- <a class="navbar-brand" href="{{ url('/register') }}">
                    Register
                </a> -->
            </div>
        </nav>

        <main class="mainContainer">
            @yield('content')
        </main>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Final Meetup</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bob.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/koen.css') }}">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/ferran.css') }}">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/bobsass.css') }}">
</head>

<body>

    <div id="app m-0 p-0">

        <main class="content-container">
            @yield('content')
        </main>

    </div>
    <div class="whitespace"></div>
    <div id="bob-navbar" class="navbar-container" role="toolbar" aria-label="Toolbar with button groups">

        <div class="nav-link" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary m-0 p-0"><a href="/"><img src="{{ URL::asset ('img/home.png') }}"
                        alt="Italian Trulli"></a></button>
        </div>
        <div class="nav-link" role="group" aria-label="Second group">
            <button type="button" class="btn btn-secondary m-0 p-0"><a href="/activities"><img src="{{ URL::asset ('img/activities.png') }}"
                        alt="Italian Trulli"></a></button>
        </div>

        <div class="nav-link" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary m-0 p-0"><a href="/chat"><img src="{{ URL::asset ('img/chat.png') }}"
                        alt="Italian Trulli"></a></button>
        </div>
        @if (Auth::check())
        <div class="nav-link" role="group" aria-label="Fourth group">
           
            <button type="button" class="btn btn-secondary m-0 p-0"><a href="/account/{{Auth::user()->id}}"><img src="{{ URL::asset ('img/account.png') }}"
                        alt="Italian Trulli"></button>
           
        </div>
        @endif
        @if (Auth::check())
        <button type="button m-0 p-0" class="nav-link">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </button>
        @else
        <div class="nav-link" role="group" aria-label="Fifth group">
            <button type="button" class=""><a href="/login"><img src="{{ URL::asset ('img/account.png') }}"
                        alt="Italian Trulli"></a></button>
        </div>
        @endif
    </div>

</body>

</html>

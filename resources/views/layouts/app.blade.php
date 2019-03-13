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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/koen.css') }}">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/ferran.css') }}">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/bob.css') }}">
</head>
<body>

    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>

    </div>
 
    <div class="card-body">
        @if (Auth::check())
            <a href="/account/{{ Auth::user()->id }}">Account</a>
        @endif
            <a href="/activities">Activities</a>

        @if (Auth::check())
            <a href="/chat">Chat</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            
        @else
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endif
    </div> 
   

</body>
</html>

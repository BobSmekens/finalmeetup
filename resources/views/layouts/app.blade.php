<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MEETUP APP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bob.js') }}" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/koen.css') }}">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/ferran2.css') }}">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/bobsass.css') }}">
    <link rel="stylesheet" style="text/css" href="{{ URL::asset('css/finalcss.css') }}">

</head>

<body>
 <!--Navbar-->
 <div class="container position-fixed">
<nav class="navbar navbar-light navbar-1 white">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">Skills & Chills</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
  aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent15">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="/activities">Activiteiten <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/chat">Chat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/account">Account</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
    </a>
    </li>
  </ul>
  <!-- Links -->

</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
</div>


    @if(Session::has('success'))
    <div class="user-feedback">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    {{Session::get('success')}}

    @endif
<!-- <div id="main"> 
    <main class="content-container">
         @yield('content')
    </main>
</div> -->



 
 

    @yield('content-top')
    @yield('content-bottom')
    <div id="fullscreen-div">
        @yield('fullscreen')
    </div>
    @yield('form')

    

    <div id="bob-navbar" class="navbar-container" role="toolbar" aria-label="Toolbar with button groups">

        <div class="nav-link" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary m-0 p-0"><a href="/"><img src="{{ URL::asset ('img/home.png') }}"
                        alt="Italian Trulli"></a></button>
        </div>


        <div class="nav-link" role="group" aria-label="Second group">
            <button type="button" class="btn btn-secondary m-0 p-0"><a href="/activities"><img src="{{ URL::asset ('img/activities.png') }}"
                        alt="Italian Trulli"></a></button>
        </div>

        @if (Auth::check())
        <div class="nav-link" role="group" aria-label="Fourth group">
           
            <button type="button" class="btn btn-secondary m-0 p-0"><a href="/account/{{Auth::user()->id}}"><img src="{{ URL::asset ('img/account.png') }}"
                        alt="Italian Trulli"></button>
        </div>
        
        <div class="nav-link" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary m-0 p-0" ><a href="/account/{{ Auth::user()->id}}/chat"><img src="{{ URL::asset ('img/chat.png') }}"
                        alt="Italian Trulli"></a></button>
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

    </div>

</body>

</html>

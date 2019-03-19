@extends('layouts.app')

@section('content')

<!-- <div class="home-container"> 
  <div class="top">
    <img class="top-image" src="{{ URL::asset ('.png') }}" alt="Card image cap">
  </div> -->
  
  <div class="bottom"><h1 class=""></h1>
    <p class="">A PLATFORM TO ENGAGE IN ACTIVITIES OR TO LEARN NEW SKILLS</p>
    <p>Welcome {{ $user[0]->name }}</p>
  </div>

</div>


@endsection

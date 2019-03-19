@extends('layouts.app')

@section('content')

<div class="home-container">
  <div class="top">
    <img class="top-image" src="{{ URL::asset ('img/activity1.jpg') }}" alt="Card image cap">
  </div>
  
  <div class="bottom"><h2 class="">MEETUP</h2>
    <p class="">Meetup or skill up, we have what you want!</p>
    <p>Welcome {{ $user[0]->name }}</p>
  </div>

</div>


@endsection

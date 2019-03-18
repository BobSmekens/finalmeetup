@extends('layouts.app')

@section('content')

<div class="card">
  <img class="card-img-top" src="{{ URL::asset ('img/activity1.jpg') }}" alt="Card image cap">
  <div class="card-body"><h2 class="card-title">MEETUP</h2>
    <p class="text-wrap">Meetup or skill up, we have what you want!</p>
    <p>Welcome {{ $user[0]->name }}</p>
  </div>

</div>


@endsection

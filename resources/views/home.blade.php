@extends('layouts.app')

@section('content')

<div class="card" style="width: 24rem;">
  <img class="card-img-top" src="{{ URL::asset ('img/one.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title">MEETUP</h3>
    <p class="card-text">Meetup or skill up, we have what you want!</p>
  </div>

</div>


@endsection

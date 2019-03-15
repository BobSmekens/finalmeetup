@extends('layouts.app')

@section('content')

    @foreach($meetups as $meetup)
        <a href="">{{ $meetup->activity_id }}</a><br>
    @endforeach
   
@endsection
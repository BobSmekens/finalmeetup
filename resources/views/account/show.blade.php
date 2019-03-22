@extends('layouts.app')

@section('content')
<div class="account-container">
    <div class="account-top debug">
        <div class="account-name">{{ $user->name}}</div>
        <div class="account-image-container">
            <img class="account-image" src="{{ URL::asset('storage/profilepics/profilepic' . $user->id . '.jpg') }}" alt="no picture chosen yet">
        </div>
    </div>

    <div class="contact-property">
        <div class="account-property">{{ $user->email}}</div>
        <div class="account-property">{{ $user->phone}}</div>
    </div>
    <div class="account-bottom">

        <div class="account-property"><span>Skills: </span>{{ $user->skills}}</div>
        <div class="account-property"><span>About: </span>{{$user->about_me}}</div>
        <div class="account-property"><span>Achievements: </span> {{$user->achievement}}</div>
        <div class="account-property"><span>Reviews: </span> {{$user->review}}</div>
        <div class="account-links-container">
            <a class="account-link-btn" href="/account/{{ $user->id }}/edit">Edit account</a>
            <a class="account-link-btn" href="/calendar">Calendar</a>
        </div>
    </div>
   
</div>
@endsection




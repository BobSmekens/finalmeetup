@extends('layouts.app')

@section('content')
<div class="account-container">
    <div class="card account-top">
        <div class="account-name">{{ $user->name}}</div>
        <div class="account-image-container"><img class="account-image" src="{{ URL::asset('storage/profilepics/profilepic' . $user->id . '.jpg') }}"></div>
        <div class="account-property"><span>{{ $user->email}}</span></div>
        <div class="account-property"><span>{{ $user->phone}}</span></div>
    </div>
    <div class="card account-bottom">
        <div class="account-property"><span>Skills: </span>{{ $user->skills}}</div>
        <div class="account-property"><span>About: </span> {{$user->about_me}}</div>
        <div class="account-property"><span>Achievements: </span> {{$user->achievement}}</div>
        <div class="account-property"><span>Reviews: </span> {{$user->review}}</div>
        <div class="account-links-container">
            <a class="account-link-btn" href="/account/{{ $user->id }}/edit">Edit account</a>
            <a class="account-link-btn" href="/calendar">Calendar</a>
        </div>
    </div>
   
</div>
@endsection




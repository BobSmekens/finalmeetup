@extends('layouts.app')

@section('content')
<div class="account-container">
    <div class="account-top">
        <div class="account-name">{{ $user->name}}</div>
        <div class="account-image-container"><img class="account-image" src="{{ URL::asset('storage/profilepics/profilepic' . $user->id . '.jpg') }}"></div>
        <div class="account-property">{{ $user->skills}}</div>
    </div>
    <div class="account-bottom">
        <div class=""><span>About: </span> {{$user->about_me}}</div>
        <div class=""><span>email: </span>{{ $user->email}}</div>
        <div class=""><span>phone: </span>{{ $user->phone}}</div>
        <div class="my-col col-12 m-4 p-0 h4"><span>achievement: </span> {{$user->achievement}}</div>
        <div class="my-col col-12 m-4 p-0 h4"><span>review: </span> {{$user->review}}</div>
        <a href="/calendar">Calender</a>
        <a href="/account/{{ $user->id }}/edit">Edit account</a>
    </div>
    <a class="btn btn-primary m-4" href="/account/{{ $user->id }}/edit">Edit account</a>
    <a class="btn btn-primary m-4" href="/calendar">Calender</a>
</div>
@endsection




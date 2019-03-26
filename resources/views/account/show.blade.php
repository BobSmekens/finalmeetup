@extends('layouts.app')

@section('content-bottom')
<div class="account-container">
    <div class="account-top debug">
        <div class="account-name">{{ $user->name}}</div>
        <div class="account-image-container">
            <img class="account-image" src="{{ URL::asset('storage/profilepics/profilepic' . $user->id . '.jpg') }}" alt="no picture chosen yet">
        </div>
    </div>

    <div class="contact-property">
        <div class="account-property"><span class="property">e-mail: </span>{{ $user->email}}</div>
        <div class="account-property"><span class="property">telefoon: </span>{{ $user->phone}}</div>
    </div>
    <div class="account-bottom">

        <div class="account-property"><span>Skills: </span><br>{{ $user->skills}}</div>
        <div class="account-property"><span>About: </span><br>{{$user->about_me}}</div>
        <div class="account-property"><span>Achievements: </span><br> {{$user->achievement}}</div>
        {{-- <div class="account-property"><span>Reviews: </span> <br>{{$user->review}}</div> --}}
        <div class="account-links-container">
        @if(Auth::check())
            @if(Auth::user()->id == $user->id)
            <a class="account-link-btn" href="/account/{{ $user->id }}/edit">
                <img class="edit-logo" src="{{ URL::asset('img/editlogo.png') }}" alt="">
                <div class="logo-subscribt">edit</div>
            </a>
   
            <a class="account-link-btn" href="/calendar">
                <img class="edit-logo" src="{{ URL::asset('img/calendarlogo.png') }}" alt="">
                <div class="logo-subscribt">agenda</div>
            </a>
      
            <form class="account-link-btn" action="/account/{{ $user->id }}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
        
                <button  type="submit">
                    <img class="edit-logo" src="{{ URL::asset('img/deletelogo.png') }}" alt="">
                </button>
                <div class="logo-subscribt">delete</div>
            </form>
            @endif
        @endif
    </div>
    </div>
   
</div>
@endsection




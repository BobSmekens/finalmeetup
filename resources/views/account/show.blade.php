@extends('layouts.app')

@section('content-bottom')
<div class="account-container">
    <div class="account-top">
        <div class="account-name toggle-content">{{ $user->name}}</div>
        <div class="account-image-container toggle-content ">
            <img class="account-image" src="<?php echo asset('public/' . $user->photo)?>" alt="no picture chosen yet">

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
                <i class="fas fa-user-edit edit-logo"></i>
                {{-- <div class="logo-subscribt">edit</div> --}}
            </a>
   
            <a class="account-link-btn" href="/calendar">
                <i class="fas fa-calendar-alt edit-logo"></i>                
                {{-- <div class="logo-subscribt">agenda</div> --}}
            </a>
      
            <form class="account-link-btn" action="/account/{{ $user->id }}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
        
                <button  type="submit" onclick="return confirm('Account verwijderen?')">
                    <i class="fas fa-dumpster-fire edit-logo"></i>
                </button>
                {{-- <div class="logo-subscribt">delete</div> --}}
            </form>
            @endif
        @endif
    </div>
    </div>
   
</div>


@endsection




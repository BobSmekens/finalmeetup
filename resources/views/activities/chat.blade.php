@extends('layouts.app')

@section('content-top')
<div class="content-top section-flex">
<h2 class="toggle-content">Chatroom <br><br> {{$activity->activity}}</h2>
</div>
@endsection

@section('content-bottom')
<div class="messages-container">
{{-- {{dd($messages)}} --}}
@foreach($messages as $message)

    @if($message->user == Auth::user()->name)
        <div class="chat-own-message">
            {{-- {{dd($message)}} --}}
            {{$message->message}}
            <div class="time-for-humans">{{$message->user}}</div>
            <div class="time-for-humans">{{$message->created_at->diffForHumans()}}</div>
        </div>
    @else 
        <div class="chat-others-message">
            {{$message->message}}
            <div class="time-for-humans">{{$message->user}}</div>
            <div class="time-for-humans">{{$message->created_at->diffForHumans()}}</div>
        </div>
    @endif
@endforeach
    </div>
<form class="chat-message" action="/activities/{{$activity->id}}/chat" method="POST">
    {{ csrf_field() }}
    <input class="form-input" placeholder="Message" type="text" autofocus name="message">
    <button type="submit">-></button>
</form>
@endsection

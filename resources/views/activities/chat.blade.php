@extends('layouts.app')

@section('content-top')
<div class="content-top">
    
</div>
@endsection

@section('content-bottom')

{{-- {{dd($messages)}} --}}

@foreach($messages as $message)

    @if($message->user == Auth::user()->id)
        <div class="chat-own-message">rechts: 
            {{$message->message}}
            <div class="time-for-humans">{{$message->created_at->diffForHumans()}}</div>
        </div>
    @else 
        <div class="chat-others-message">rechts: 
            {{$message->message}}
            <div class="time-for-humans">{{$message->created_at->diffForHumans()}}</div>
        </div>
    @endif
@endforeach

<form class="chat-message" action="/activities/{{$activity->id}}/chat" method="POST">
    {{ csrf_field() }}
    <input class="form-input" placeholder="Message" type="text" autofocus name="message">
    <button type="submit">Send</button>
</form>
@endsection

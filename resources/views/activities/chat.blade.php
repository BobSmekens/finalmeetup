@extends('layouts.app')

@section('content-top')
<div class="content-top">
    
</div>
@endsection

@section('content-bottom')

{{-- {{dd($messages)}} --}}
    <form class="chat-message" action="/activities/{{$activity->id}}/chat" method="POST">
        {{ csrf_field() }}
        <input class="form-input" placeholder="Message" type="text" name="message">
        <button type="submit">Send</button>
    </form>
@foreach($messages as $message)
<div>{{$message->message}}</div>
@endforeach

@endsection

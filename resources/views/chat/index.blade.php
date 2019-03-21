@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
        @if($message->from_user != Auth::user()->id)
        <div class="recieved-message">
            <img id="chat-pic-sender" src="{{ URL::asset('storage/profilepics/profilepic' . $recepient->id . '.jpg') }}" alt="">
            <span>{{ $message->message }}</span>
            <div> {{ $message->from_user}}</div>
        </div>
        @else
        <div class="send-message">
            <span>{{ $message->message }}</span>
            <div> {{ $message->from_user}}</div>
            <img id="chat-pic-sender" src="{{ URL::asset('storage/profilepics/profilepic' . $message->to_user . '.jpg') }}" alt="">
        </div>
        @endif
    @endforeach

<img id="chat-pic-sender" src="{{ URL::asset('storage/profilepics/profilepic' . Auth::user()->id . '.jpg') }}" alt="">

<form class="chat-message" action="/account/{{$recepient->id}}/chat" method="POST">
    {{ csrf_field() }}
    <input class="form-input" placeholder="Message" type="text" name="message">
    <button type="submit">Send</button>
</form>
@endsection
@extends('layouts.app')

@section('content')

    @foreach($meetups as $meetup)

        
        <form action="/calendar/{{ $meetup->id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="">{{ $meetup->activity_id }}</a>
            <button type="submit">Delete</button>
        </form>
    
    @endforeach
   
@endsection
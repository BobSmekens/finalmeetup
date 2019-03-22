@extends('layouts.app')

@section('content')

    @foreach($user->activity as $activity)

        <form action="/calendar/{{ $activity->id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="">{{ $activity->activity}}</a>
            <button type="submit">Delete</button>
        </form>
    
    @endforeach
   
@endsection
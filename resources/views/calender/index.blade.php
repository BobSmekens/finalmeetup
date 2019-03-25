@extends('layouts.app')

@section('content')

    @foreach($user->activity as $activity)

        <form class="calendar-item" action="/calendar/{{ $activity->id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
    
                <a href="/activities/{{ $activity->id }}">{{ $activity->activity}}</a>
                <button type="submit">X</button>

            
        </form>
    
    @endforeach
   
@endsection
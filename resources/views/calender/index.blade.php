@extends('layouts.app')

@section('content-top')
    <div class="content-top section-flex">
        <h3>Mijn agenda</h3>
    </div>

@endsection

@section('content-bottom')

    @foreach($user->activity as $activity)

        <form class="calendar-item" action="/calendar/{{ $activity->id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
    
                <a href="/activities/{{ $activity->id }}">{{ $activity->activity}}</a>
                <button type="submit">X</button>

            
        </form>
    
    @endforeach
   
@endsection
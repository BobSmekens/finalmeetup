@extends('layouts.app')

@section('content-top')
    <div class="content-top section-flex">
        <h3>Mijn agenda</h3>
    </div>

@endsection

@section('content-bottom')

    @foreach($ownActivities as $ownActivity)

        <form class="calendar-item" action="/calendar/{{ $ownActivity->id}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
    
                <a href="/activities/{{ $ownActivity->id }}">{{ $ownActivity->activity}}</a>
                {{-- <button type="submit">X</button> --}}

            
        </form>
    
    @endforeach

    @foreach($notOwnActivities as $activity)

    <form class="calendar-item" action="/calendar/{{ $notOwnActivity->id}}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

            <a href="/activities/{{ $notOwnActivity->id }}">{{ $notOwnActivity->activity}}</a>
            {{-- <button type="submit">X</button> --}}

        
    </form>

@endforeach
   
@endsection
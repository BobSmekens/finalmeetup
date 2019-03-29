@extends('layouts.app')

@section('content-top')
    <div class="content-top section-flex">
        <h2>Mijn agenda</h2>
    </div>

@endsection

@section('content-bottom')
<div class="activities-index-leader-acivities">
    <div class="margin-content property activities-title">Zelf georganiseerd</div>
        @foreach($ownActivities as $ownActivity)

            <form class="calendar-item" action="/calendar/{{ $ownActivity->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
        
                    <a href="/activities/{{ $ownActivity->id }}">{{ $ownActivity->activity}}</a>
                    {{-- <button type="submit">X</button> --}}
            </form>
        
        @endforeach
</div>
<div class="margin-content activities-index-other-activities">
    <div class="property activities-title">Gaat deelnemen aan:</div>

@foreach($notOwnActivities as $activity)
    @for($x = 1; $x < count($activity->users); $x++)
        @if($activity->users[$x]->id = '{{Auth::user()->id}}' && $activity->posted_by != '{{Auth::user()->id}}') 
            <form class="calendar-item" action="/calendar/{{ $activity->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            
                <a href="/activities/{{ $activity->id }}">{{ $activity->activity}}</a>
                <button type="submit">X</button>
            </form>
        @endif
    @endfor
@endforeach
    {{-- <form class="calendar-item" action="/calendar/{{ $activity->id}}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <a href="/activities/{{ $activity->id }}">{{ $activity->activity}}</a>
        <button type="submit">X</button>
    </form> --}}
</div>
@endsection
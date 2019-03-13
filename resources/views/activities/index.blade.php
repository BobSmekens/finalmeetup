@extends('layouts.app')

@section('content')
    <h3>Activities</h3>
    
    <p>All activities, sort by skills or activity</p>

    @foreach($activities as $activity)
        <div>
            <a href="/activities/{{ $activity->id }}">{{ $activity->activity }}</a>   
        </div>
    @endforeach
    <br>
    <a href="/activities/create">Add activity</a>
@endsection
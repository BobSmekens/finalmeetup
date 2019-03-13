@extends('layouts.app')

@section('content')
    <h3>{{ $activity->activity}}</h3>
    
    <p>Maximum amount of people: {{ $activity->max_persons}}</p>
    <p>Category: {{ $activity->category }}</p>
    <a href="/activities/{{ $activity->id }}/edit">Edit activity</a>


@endsection
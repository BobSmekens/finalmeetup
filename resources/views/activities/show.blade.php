@extends('layouts.app')

@section('content')
    <h3>{{ $activity->activity}}</h3>
    
    <p>Single activity</p>

    <a href="/activities/{{ $activity->id }}/edit">Edit activity</a>

    <form action="/activities/{{ $activity->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <button type="submit">Delete</button>
    </form>


@endsection
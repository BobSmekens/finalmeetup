@extends('layouts.app')

@section('content')
    
<div class="container m-0 p-0 vh-100 justify-content-center ">
    <div class="row m-0 p-0 vh-50 vertical-align bg-danger">
    <p>Maximum amount of people: {{ $activity->max_persons}}</p>
    <p>Category: {{ $activity->category}}</p>
    <a href="/activities/{{ $activity->id }}/edit">Edit activity</a>
    </div>
    <div class="row mt-4 p-0 vh-50">
    </div>
</div>




<h3>{{ $activity->activity}}</h3>
    





@endsection
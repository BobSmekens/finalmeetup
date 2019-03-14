@extends('layouts.app')

@section('content')
<div class="container m-0 p-0 justify-content-center">
    <div class="my-row row m-0 p-0 bg-danger align-content-center justify-content-center">
    {{ $activity->activity}}
    </div>
    <div class="my-row row m-4 p-4 justify-content-center">
        <div class="col">Maximum amount of people: {{ $activity->max_persons}}</div>
        <div class="col"> {{ $activity->description}}</div>
        <div class="col"> {{ $activity->category}}</div>

    </div>
    <a class="btn btn-danger" href="">pas activiteit aan</a>
    <a class="btn btn-danger" href="/activities/{{ $activity->id }}/edit">schrijf je in voor activiteit</a>
</div>
@endsection
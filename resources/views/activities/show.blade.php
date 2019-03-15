@extends('layouts.app')

@section('content')
<div class="container m-0 p-0 justify-content-center">
    <div class="my-row row m-0 p-0 bg-danger align-content-center justify-content-center">
    {{ $activity->activity}}
    </div>
    <div class="my-row row m-4 p-4 justify-content-center">
        <div class="col-12">Maximum amount of people: {{ $activity->max_persons}}</div>
        <div class="col-12"> {{ $activity->description}}</div>
        <div class="col-12"> {{ $activity->category}}</div>

    </div>
    <a class="btn btn-danger bob-btn-visable" href="">schrijf je in voor activiteit</a>
    <a class="btn btn-danger bob-btn-visable" href="/activities/{{ $activity->id }}/edit">pas activiteit aan</a>
</div>
@endsection
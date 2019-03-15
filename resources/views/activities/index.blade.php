@extends('layouts.app')

@section('content')
<div class="container m-0 p-0 justify-content-center">
    <div class="my-row row m-0 p-0 bg-danger align-content-center justify-content-center">
        <div class="col-12">
            <h3>Activities</h3>
        </div>
        <div class="col-12">
            <p>All activities, sort by skills or activity</p>
        </div>
    </div>
    <div class="h-25 col-12 m- p-0 d-flex justify-content-start">
        <div class="my-col col-3">Aantal personen</div> 
        <div class="my-col col-5">Activiteit</div>
        <div class="my-col col-4">aangemaakt door</div>
        </div>
    <div class="my-row row m-0 p-0 ">
        @foreach($activities as $activity)
        <div class="h-25 my-col  col-12 m- p-0 d-flex justify-content-start">
        <div class="my-col col-3">1/<span>{{$activity->max_persons}}</div> 
        <div class="my-col col-5"><a href="/activities/{{ $activity->id }}">
        {{ $activity->activity }} </a></div>
        <div class="my-col col-4"><span class=>{{$activity->posted_by}}</div>
        </div>
        @endforeach
    </div>
    <a class="btn btn-danger m4" href="/activities/create">Add activity</a>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="card activities-index-top">
    <h3>Activities</h3>
</div>
<div class="activities-table-titles-container">
    <div class="activity-index-col">Deelnemers</div>
    <div class="activity-table">Activiteit</div>
    <div class="activity-index-col">Organisator</div>
</div>


    @foreach($activities as $activity)
    <div class="activities-table-titles-container">
        <div class="activity-index-col">{{$activity->users->count()}}/{{$activity->max_persons}}</div>
        <div class="activity-table">
            <a href="/activities/{{ $activity->id }}">{{ $activity->activity }}</a>
        </div>
        <div class="activity-index-col">{{$activity->posted_by}}</div>
    </div>
    @endforeach

<div class="activity-add-container">
    <a class="activity-index-add" href="/activities/create">Add activity</a>
</div>

@endsection

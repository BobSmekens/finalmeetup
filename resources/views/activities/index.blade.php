@extends('layouts.app')

@section('content-top')

    <div class="content-top activities-align-bot">
        <div class="activities-sort-container section-flex">
            <div class="activities-sort-link toggle-content">Skill-up</div>
            <div class="activities-sort-link toggle-content">meet-up</div>
            <div class="activities-sort-link toggle-content">all-up</div>
        </div> 
       
        <div class="activities-table-titles-container toggle-content">
            <div class="activity-index-col">Plekken</div>
            <div class="activity-table">Activiteit</div>
            <div class="activity-index-col">Organisator</div>
        </div>
    </div>
@endsection

@section('content-bottom')


<div class="activity-list-container">
@foreach($activities as $activity)
<div class="activities-table-titles-container">
    <div class="activity-index-col">
        {{$activity->users->count()}}/{{$activity->max_persons}}
        @if ($activity->users->count()>=$activity->max_persons)
            <br><span class="alert">Vol</span>
        @endif
    </div>
    <div class="activity-table">
        <a href="/activities/{{ $activity->id }}">{{ $activity->activity }}</a>
    </div>

    <div class="activity-index-col">{{$activity->users[0]->name}}</div>
</div>

@endforeach
</div>



{{$activities->links()}}
@if (Auth::check())
    <div class="activity-add-container">
        <a class="activity-index-add" href="/activities/create">Organiseer activiteit</a>
    </div>
@endif
@endsection

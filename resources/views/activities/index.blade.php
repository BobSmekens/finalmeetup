@extends('layouts.app')

@section('content-top')

    <div class="content-top activities-align-bot">
        <div class="activities-sort-container section-flex">
            @if($category == 'Skillup')
                <div class="activities-sort-link toggle-content active"><a href="/skillup">Skillup</a></div>
                <div class="activities-sort-link toggle-content"><a href="/chillup">Chillup</a></div>
                <div class="activities-sort-link toggle-content"><a href="/activities">Allup</a></div>
            @elseif($category == 'Chillup')
                <div class="activities-sort-link toggle-content"><a href="/skillup">Skillup</a></div>
                <div class="activities-sort-link toggle-content active"><a href="/chillup">Chillup</a></div>
                <div class="activities-sort-link toggle-content"><a href="/activities">Allup</a></div>
            @else
                <div class="activities-sort-link toggle-content"><a href="/skillup">Skillup</a></div>
                <div class="activities-sort-link toggle-content"><a href="/chillup">Chillup</a></div>
                <div class="activities-sort-link toggle-content active"><a href="/activities">Allup</a></div>
                @endif
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
@foreach($activities->sortByDesc('created_at') as $activity)
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
    <div class="created-at">{{$activity->created_at->diffForHumans()}}</div>
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

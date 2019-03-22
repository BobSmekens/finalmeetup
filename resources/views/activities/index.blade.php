@extends('layouts.app')

@section('content')
<div class="activities-index-top">

</div>
</div>


<div class="activity-list-container">
@foreach($activities as $activity)
<div class="activities-table-titles-container">
    <div class="activity-index-col">
        {{$activity->users->count()}}/{{$activity->max_persons}}
        @if ($activity->users->count()>=$activity->max_persons)
            <span class="alert">activiteit is vol</span>
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
<div class="activity-add-container">
    <a class="activity-index-add" href="/activities/create">Nieuwe activiteit</a>
</div>

@endsection

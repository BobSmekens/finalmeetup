@extends('layouts.app')

@section('content-top')
    <div class="content-top">
        <div class="activities-signup-link">
                @if ($activity->users->count()>=$activity->max_persons)
                        <span class="">Geen plekken</span>
                @else
                        <a class="bob-btn-visable" href="/activities/{{ $activity->id }}/meetup">Inschrijven</a> 
                @endif
        </div>
    </div>
@endsection

@section('content-bottom')
<span class="name-activity"><h2>{{ $activity->activity}}</h2></span>

    <div class="">
        <div class="activity-property"><span class="bold-text">{{ $activity->category}} spots:</span> <br>{{$activity->users->count()}} / {{ $activity->max_persons}}</div>
        <div class="activity-property"><span class="bold-text">Wat gaat er gebeuren? </span><br>{{ $activity->description}}</div>
        <div class="activity-property"><span class="bold-text">Organisator:</span> <br> {{$activity->users[0]->name}}</div>
    </div>
   
<div class="activity-button-container">
@if(Auth::user()->id == $activity->posted_by)
    <a class="activity-button-link" href="/activities/{{ $activity->id }}/edit">pas activiteit aan</a>


    <form class="activity-button-link" action="/activities/{{ $activity->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <button class="account-delete-button" type="submit">Delete activity</button>
    </form>
    @else
    <img class="chillup image-centered" src="{{ URL::asset('img/birdup.png') }}" alt="no picture chosen yet">

@endif    
</div>


</div>
@endsection
@extends('layouts.app')

@section('content-top')
<div class="content-top">
    <div class="activities-signup-link">
        @if ($activity->users->count()>=$activity->max_persons && $signedInUser == true)
            <span class="">Je doet mee</span>    

            @if(Auth::user()->id != $activity->posted_by)

                <form class="subscribe-activities-button-container" action="/activities/{{ $activity->id}}/unsub" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                
                    <button class="activity-subscribe-btn" type="submit">Uitschrijven</button>
                </form>
            @else
                    <h2 class="toggle-content koenh2">Je bent de organisator</h2>

            @endif
        @elseif ($activity->users->count()>=$activity->max_persons && $signedInUser == false)
            <span class="">Geen plekken</span>
        @elseif ($signedInUser == true)
            @if(Auth::user()->id != $activity->posted_by)
                <form class="subscribe-activities-button-container" action="/calendar/{{ $activity->id}}/unsub" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="activity-subscribe-btn" type="submit">Uitschrijven</button>
                </form>
            @else
                <h2 class="toggle-content koenh2">Je bent de organisator</h2>
            @endif
        @else
            @if(Auth::user()->id != $activity->posted_by)
                <a class="bob-btn-visable" href="/activities/{{ $activity->id }}/meetup">Inschrijven</a>
            @endif
        @endif
    </div>
    <div class="back-button-box"> <a href="{{URL::previous()}}"><img src="{{URL::asset('img/back-button.png')}}" class="back-button"></a></div>
</div>
@endsection

@section('content-bottom')
    <span class="name-activity">
        <h2 class="">{{ $activity->activity}}</h2>
    </span>
    <div class="">
        <div class="activity-property">
            <span class="bold-text">{{ $activity->category}} spots:</span><br>
            {{$activity->users->count()}} / {{ $activity->max_persons}}
        </div>
        <div class="activity-property">
            <span class="bold-text">Wat gaat er gebeuren? </span><br>
            {{ $activity->description}}
        </div>
        <div class="activity-property">
            <span class="bold-text">Organisator:</span><br> 
            {{-- {{dd($activity->posted_by)}} --}}
            @foreach($activity->users as $user)
                @if($activity->posted_by == $user->id)
                    {{$user->name}}
                @endif
            @endforeach
        </div>
        <div class="activity-property">
            <span class="bold-text">Wanneer aangemaakt? </span><br>
            {{ $activity->created_at->diffForHumans()}}
        </div>
    </div>
    @if($signedInUser ==true)
        <a class="activity-button-link" href="/activities/{{ $activity->id }}/chat">Chat</a>
    @endif
    <div class="activity-button-container">
        @if(Auth::user()->id == $activity->posted_by)
            <a class="activity-button-link" href="/activities/{{ $activity->id }}/edit">Aanpassen</a>
            <form class="activity-button-link account-delete-button" action="/activities/{{ $activity->id }}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="account-delete-button" type="submit" onclick="return confirm('Activiteit verwijderen?')">Verwijderen</button>
            </form>
        @else
            <img class="chillup image-centered" src="{{ URL::asset('img/birdup.png') }}" alt="no picture chosen yet">
        @endif
    </div>

@endsection

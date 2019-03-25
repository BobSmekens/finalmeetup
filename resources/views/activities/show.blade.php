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
<span class="name-activity "><h2>{{ $activity->activity}}</h2></span>

<div class="container m-0 p-0 justify-content-center">
    <div class="my-row row m-0 p-0 align-content-center justify-content-center">
    </div>
    <div class="my-row row m-4 p-4 justify-content-center">
        <div class="col-12">Maximum amount of people: {{ $activity->max_persons}}</div>
        <div class="col-12">{{ $activity->description}}</div>
        <div class="col-12">{{ $activity->category}}</div>

    </div>
   

            <a class="bob-btn-visable" href="/activities/{{ $activity->id }}/edit">pas activiteit aan</a>


    <form action="/activities/{{ $activity->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

                <button class="account-delete-button" type="submit">Delete activity</button>
        </form>



</div>
@endsection
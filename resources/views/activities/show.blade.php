@extends('layouts.app')

@section('content')
<div class="container m-0 p-0 justify-content-center">
    <div class="my-row row m-0 p-0 bg-danger align-content-center justify-content-center">
    {{ $activity->activity}}
    </div>
    <div class="my-row row m-4 p-4 justify-content-center">
        <div class="col-12">Maximum amount of people: {{ $activity->max_persons}}</div>
        <div class="col-12">{{ $activity->description}}</div>
        <div class="col-12">{{ $activity->category}}</div>

    </div>
    @if ($activity->users->count()>=$activity->max_persons)
            <span class="alert">activiteit is vol
            </span>
            @else
            <a class="bob-btn-visable" href="/activities/{{ $activity->id }}/meetup">schrijf je in voor activiteit</a>

            @endif</div>

            <a class="bob-btn-visable" href="/activities/{{ $activity->id }}/edit">pas activiteit aan</a>


    <form action="/activities/{{ $activity->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

                <button class="account-delete-button" type="submit">Delete activity</button>
        </form>



</div>
@endsection
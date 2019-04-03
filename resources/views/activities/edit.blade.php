@extends('layouts.app')

@section('content-top')
    <div class="content-top section-flex">
        <h2 class="toggle-content">Edit "{{ $activity->activity}}"</h2>
        <div class="back-button-box"> <a href="{{URL::previous()}}"><img src="{{URL::asset('img/back-button.png')}}" class="back-button"></a></div>
    </div>
@endsection

@section('content-bottom')

    <div class="form-container">
        <form class="login-form" action="/activities/{{ $activity->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-label">Activiteit:</div>


                <input class="form-input" required type="text" name="activity" value="{{ $activity->activity}}">

            <br>
            <span class="form-label">Omschrijving:</span>

            <span>
                <input class="form-input" required type="text" name="description" value="{{ $activity->description}}">
            </span>
            <br>

            <span class="form-label">Aantal plekken:</span>

            <span>
                <input class="form-input" required type="number" name="persons" value="{{ $activity->max_persons}}">
            </span>
            <br>

            <span class="form-label">Categorie:</span>

            <span>
                <select name="category" class="form-input">
                    <option value="Skill-up">Skill-up</option>
                    <option value="Meetup">Meet-up</option>
                </select>
            </span>
            <br>

            <button class="account-eddit-button" type="submit">Pas aan</button>
        </form>

        {{-- <form action="/activities/{{ $activity->id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <button class="account-delete-button" type="submit">Delete activity</button>
        </form> --}}
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="card activities-index-top">
        <h3>Edit "{{ $activity->activity}}"</h3>
</div>
    <div class="card form-container">
        <form action="/activities/{{ $activity->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-label">Activity name:</div>


                <input class="form-input" required type="text" name="activity" value="{{ $activity->activity}}">

            <br>
            <span class="form-label">Description:</span>

            <span>
                <input class="form-input" required type="text" name="description" value="{{ $activity->description}}">
            </span>
            <br>

            <span class="form-label">Max-persons:</span>

            <span>
                <input class="form-input" required type="number" name="persons" value="{{ $activity->max_persons}}">
            </span>
            <br>

            <span class="form-label">Category:</span>

            <span>
                <select name="category" class="form-input">
                    <option value="Skill-up">Skill-up</option>
                    <option value="Meetup">Meet-up</option>
                </select>
            </span>
            <br>

            <button class="account-eddit-button" type="submit">Edit activity</button>
        </form>

        <form action="/activities/{{ $activity->id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <button class="account-delete-button" type="submit">Delete activity</button>
        </form>
    </div>
</div>
@endsection

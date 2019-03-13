@extends('layouts.app')

@section('content')
    <h3>Edit "{{ $activity->activity}}"</h3>
    
    <form action="/activities/{{ $activity->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <span class="form-label">Activity:</span>

        <span>
            <input class="col-md-6 form-control form-control-lg" required type="text" name="activity">
        </span>
        <br>

        <span class="form-label">Max-persons:</span>

        <span>
            <input class="col-md-6 form-control form-control-lg" required type="text" name="persons">
        </span>
        <br>

        <span class="form-label">Category:</span>

        <span>
            <select name="category" id="">
                <option value="Skill-up">Skill-up</option>
                <option value="Meetup">Meetup</option>
            </select>
        </span>
        <br>

        <button type="submit">Edit activity</button>
    </form>

    <form action="/activities/{{ $activity->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <button type="submit">Delete</button>
    </form>




@endsection
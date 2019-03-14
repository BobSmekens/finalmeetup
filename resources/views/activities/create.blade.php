@extends('layouts.app')

@section('content')
    <h3>Create activity</h3>
    
    <form action="/activities" method="POST">
    {{ csrf_field() }}

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

    <span class="form-label">Max-persons:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" required type="textarea" name="description">
    </span>
    <br>

    <button type="submit">Create activity</button>
</form>

@endsection
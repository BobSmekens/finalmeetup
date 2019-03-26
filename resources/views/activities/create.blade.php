@extends('layouts.app')

@section('content-top')
    <div class="content-top section-flex">
        <h2 class="toggle-content">Organiseer activiteit</h2>
    </div>
@endsection

@section('content-bottom')

    <div class="my-row row m-4 p-4 ">
    <form action="/activities" method="POST">
    {{ csrf_field() }}

    <span class="form-label">Activity:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" required type="text" name="activity">
    </span>
    <br>

    <span class="form-label">Max-persons:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" required type="number" name="persons">
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

    <span class="form-label">omschrijving</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" required type="textarea" name="description">
    </span>
    <br>

    <button type="submit">Create activity</button>
</form>
</div>
</div>

    
    

@endsection
@extends('layouts.app')

@section('content')
<div class="container m-0 p-0 justify-content-center">
        <div class="my-row row m-0 p-0 bg-danger align-content-center justify-content-center">
                <h3>Edit "{{ $activity->activity}}"</h3>
        </div>
        <div class="my-row row m-4 p-4 justify-content-center">
                <form class="col-12" action="/activities/{{ $activity->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

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
                                <select name="category" id="m-4">
                                        <option value="Skill-up">Skill-up</option>
                                        <option value="Meetup">Meetup</option>
                                </select>
                        </span>
                        <br>

                        <button type="submit">Edit activity</button>
                </form>

                <form  class="col-12" action="/activities/{{ $activity->id }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}

                        <button type="submit">Delete</button>
                </form>
        </div>
</div>
@endsection
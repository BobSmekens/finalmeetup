@extends('layouts.app')

@section('content')

<h3>Edit Account</h3>

<form action="/account/{{ $user->id }}" method="POST">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <span class="form-label">Name:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->name }}" required type="text" name="name">
    </span>
    <br>

    <span class="form-label">E-mail:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->email }}" required type="text" name="email">
    </span>
    <br>

    <span class="form-label">Phone:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->phone }}" required type="text" name="phone">
    </span>
    <br>

    <span class="form-label">Photo:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->photo }}" required type="text" name="photo">
    </span>
    <br>

    <span class="form-label">Skills:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->skills }}" required type="text" name="skills">
    </span>
    <br>

    <button type="submit">Update Account</button>
</form>
@endsection



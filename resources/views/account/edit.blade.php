@extends('layouts.app')

@section('content')

<h3>Edit Account</h3>

<div class="card form-container">

    <img id="edit-profile-pic" src="{{ URL::asset('storage/profilepics/profilepic' . $user->id . '.jpg') }}" alt="">

    <form id="edit-profile-form" action="/account/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <span>
            <input class="add-file" type="file" name="photo">
        </span>
        <span class="form-label">Name:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->name }}" required type="text" name="name">
        </span>
        <br>

        <span class="form-label">E-mail:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->email }}" required type="text" name="email">
        </span>
        <br>

        <span class="form-label">Phone:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->phone }}" required type="text" name="phone">
        </span>
        <br>

        <span class="form-label">Skills:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->skills }}" required type="text" name="skills">
        </span>
        <br>

        <span class="form-label">About me:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->about_me }}" required type="text" name="about_me">
        </span>
        <br>

        <button class="account-eddit-button" type="submit">Update account</button>



    </form>
    <form action="/account/{{ $user->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <button class="account-delete-button" type="submit">Delete account</button>
    </form>
</div>
</div>



@endsection

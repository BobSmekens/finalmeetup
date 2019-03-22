@extends('layouts.app')

@section('content')

<h3>Edit Account</h3>

<div class="form-container">
    <div class="account-top">
        <img id="edit-profile-pic" src="{{ URL::asset('storage/profilepics/profilepic' . $user->id . '.jpg') }}" alt="">
    </div>
    <form class="login-form" id="edit-profile-form" action="/account/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
    <input class="add-file" type="file" name="photo">

        <span class="form-label">Name:</span>

        <span >
            <input class="form-input"  placeholder="{{ $user->name }}" value="{{ $user->name }}" required type="text" name="name">
        </span>

        <span class="form-label">E-mail:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->email }}" value="{{ $user->email }}"  type="text" name="email">
        </span>


        <span class="form-label">Phone:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->phone }}" value="{{ $user->phone }}"  type="text" name="phone">
        </span>
  

        <span class="form-label">Skills:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->skills }}" value="{{ $user->skills }}"  type="text" name="skills">
        </span>

        <span class="form-label">About me:</span>

        <span>
            <input class="form-input" placeholder="{{ $user->about_me }}" value="{{ $user->about_me }}" type="text" name="about_me">
        </span>

        <button class="account-eddit-button" type="submit">Update</button>



    </form>
    <form action="/account/{{ $user->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <button class="account-delete-button" type="submit">Delete</button>
    </form>
</div>
</div>



@endsection

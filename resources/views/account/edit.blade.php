@extends('layouts.app')

@section('content')

<h3>Edit Account</h3>

<div class="card form-container">
        <form id="edit-profile-form" action="/account/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                <img id="edit-profile-pic" src="{{ URL::asset('storage/profilepics/profilepic' . $user->id . '.jpg') }}" alt="">

                <span>
                        <input class="" type="file" name="photo">
                </span>
                        <span class="form-label">Name:</span>

                        <span>
                                <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->name }}"
                                        required type="text" name="name">
                        </span>
                        <br>

                        <span class="form-label">E-mail:</span>

                        <span>
                                <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->email }}"
                                        required type="text" name="email">
                        </span>
                        <br>

                        <span class="form-label">Phone:</span>

                        <span>
                                <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->phone }}"
                                        required type="text" name="phone">
                        </span>
                        <br>

                        <span class="form-label">Skills:</span>

                        <span>
                                <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->skills }}"
                                        required type="text" name="skills">
                        </span>
                        <br>

                        <span class="form-label">About me:</span>

                        <span>
                                <input class="col-md-6 form-control form-control-lg" placeholder="{{ $user->about_me }}"
                                        required type="text" name="about_me">
                        </span>
                        <br>

                        <button type="submit">Update Account</button>
                </form>

                <form action="/account/{{ $user->id }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}

                        <button type="submit">Delete</button>
                </form>
        </div>
</div>


<!-- <form action="/account/{{ $user->id }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <span class="form-label">Photo: {{$user->photo }}</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" required type="file" name="photo">
    </span>

    <button type="submit">Upload profile picture</button>

</form> -->


@endsection
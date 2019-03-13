@extends('layouts.app')

@section('content')

<div class="container m-0 p-0 vertical-align fill">
        <div class="col-12 bg-info vh-50">
        </div>
        <div class="col-12 bg-warning vh-50">
        </div>
</div>

<!-- <div class="container m-0 p-0 fill">
    <div class="container m-0 p-0 bg-info h-50">
        <div class="m-0 p-0 col ml-4 col-lg-6">
            <div class="m-0 p-0 col">
                <img src="">
            </div>
        </div>
        <div class="m-0 p-0 row ml-4 col-lg-6">
            <div class="m-0 p-0col card-title d-flex justify-content-center">
                </h1>{{ $user->name}}</h1>
            </div>
        </div>
        <div class="m-0 p-0row ml-4 col-lg-6">
            <div class="m-0 p-0 col card-title d-flex justify-content-center">
                <h4>{{ $user->skills}}</h4>
            </div>
        </div>
    </div>
    <div class="m-0 p-0 container bg-light h-50">
        <div class="m-0 p-0 row ml-4 col-lg-6">
            <div class="col ml-4">
                <div>
                    <h6>about me: </h6>Happy to learn other people the ways to solve a rubiks cube
                    {{ $user->skills}}
                </div>
                <div>
                    <h6>email: </h6>{{ $user->email}}
                </div>
                <div>
                    <h6>phone: </h6>{{ $user->phone}}
                </div>
            </div>
        </div>
        <div class="m-0 p-0 row ml-4 col-lg-6">
            <div class="m-0 p-0 col ml-4">
                <div>
                    <h6>achievements: </h6>{{ $user->phone}}
                </div>
            </div>
        </div>
        <div class="m-0 p-0 row ml-4 col-lg-6">
            <div class="m-0 p-0 col ml-4">
                <div>
                    <h6>reviews: </h6>
                </div>
            </div>
        </div>
        <div class="m-0 p-0 row ml-4 col-lg-6">
            <div class="m-0 p-0 col card-title d-flex justify-content-center">
                <a class="m-0 p-0 btn btn-success" href="/account/{{ $user->id }}/edit">Edit account</a>
            </div>
        </div>
    </div>
</div> -->






<!-- <h3>My account</h3>

<div><span>Name: </span>{{ $user->name}}</div>
<div><span>email: </span>{{ $user->email}}</div>
<div><span>phone: </span>{{ $user->phone}}</div>
<div><span>photo: </span>{{ $user->photo}}</div>
<div><span>skills: </span>{{ $user->skills}}</div>
<a href="/account/{{ $user->id }}/edit">Edit account</a> -->
@endsection



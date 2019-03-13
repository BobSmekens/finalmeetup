@extends('layouts.app')

@section('content')

<div class="container m-0 p-0">
    <div class="container m-0 p-0 bg-info">
        <div class="row ml-4 col-lg-6">
            <div class="col">
                <img src="">
            </div>
        </div>
        <div class="row ml-4 col-lg-6">
            <div class="col card-title d-flex justify-content-center">
                </h2>{{ $user->name}}</h2>
            </div>
        </div>
        <div class="row ml-4 col-lg-6">
            <div class="col card-title d-flex justify-content-center">
                <h4>{{ $user->skills}}</h4>
            </div>
        </div>
    </div>
    <div class="container .bg-light">
        <div class="row ml-4 col-lg-6">
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
        <div class="row ml-4 col-lg-6">
            <div class="col ml-4">
                <div>
                    <h6>achievements: </h6>{{ $user->phone}}
                </div>
            </div>
        </div>
        <div class="row ml-4 col-lg-6">
            <div class="col ml-4">
                <div>
                    <h6>reviews: </h6>
                </div>
            </div>
        </div>
        <div class="row ml-4 col-lg-6">
            <div class="col card-title d-flex justify-content-center">
                <a class="btn btn-success" href="/account/{{ $user->id }}/edit">Edit account</a>
            </div>
        </div>
    </div>
</div>






<!-- <h3>My account</h3>

<div><span>Name: </span>{{ $user->name}}</div>
<div><span>email: </span>{{ $user->email}}</div>
<div><span>phone: </span>{{ $user->phone}}</div>
<div><span>photo: </span>{{ $user->photo}}</div>
<div><span>skills: </span>{{ $user->skills}}</div>
<a href="/account/{{ $user->id }}/edit">Edit account</a> -->
@endsection



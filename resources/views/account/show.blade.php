@extends('layouts.app')

@section('content')

<div class="container m-0 p-0 fluid justify-content-center ">
        <div class="row m-0 p-0 vertical-align">
                <div class="col-12 m-4 h1"><span>{{ $user->name}}</div>
                <div class="col-12 m-4"><span>photo: </span>{{ $user->photo}}</div>
                <div class="col-12 m-4 h5"><span>skills:</span>{{ $user->skills}}</div>
        </div>
        <div class="row mt-4 p-0">
                <div class="col-12 m-4 h4"><span>About: </span> {{$user->about_me}}</div>
                <div class="col-12 m-4 h4"><span>email: </span>{{ $user->email}}</div>
                <div class="col-12 m-4 h4"><span>phone: </span>{{ $user->phone}}</div>
        </div>
        <a class="btn btn-danger m-4" href="/account/{{ $user->id }}/edit">Edit account</a>
</div>
@endsection




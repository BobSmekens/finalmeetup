@extends('layouts.app')

@section('content')
<div class="container m-0 p-0 vh-100 justify-content-center ">
    <div class="row m-0 p-0 vh-50 vertical-align bg-info ">
        <div class="col-12 mt-4 ml-4 p-0 h1 "><span>{{ $user->name}}</div>
        <div class="col-12 mt-4 ml-4 p-0"><span><img class="rounded-circle" src="{{ URL::asset('storage/profilepics/profilepic' . $user->id . '.jpg') }}"></div>
        <div class="col-12 mt-4 ml-4 p-0 h5">{{ $user->skills}}</div>
    </div>
    <div class="row mt-4 p-0 vh-50">
        <div class="my-col col-12 mt-4 ml-4 p-0 h4"><span>About: </span> {{$user->about_me}}</div>
        <div class="my-col col-12 m-0 p-0 ml-4 h6 text-secondary"><span>email: </span>{{ $user->email}}</div>
        <div class="my-col col-12 m-0 p-0 ml-4 sh6 text-secondary"><span>phone: </span>{{ $user->phone}}</div>
        <div class="my-col col-12 m-4 p-0 h4"><span>achievement: </span> {{$user->achievement}}</div>
        <div class="my-col col-12 m-4 p-0 h4"><span>review: </span> {{$user->review}}</div>
        

    </div>
    <a class="btn btn-primary m-4" href="/account/{{ $user->id }}/edit">Edit account</a>
    <a class="btn btn-primary m-4" href="/calender">Calender</a>
</div>
@endsection




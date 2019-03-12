@extends('layouts.app')

@section('content')
<h3>My account</h3>

<div><span>Name: </span>{{ $user->name}}</div>
<div><span>email: </span>{{ $user->email}}</div>
<div><span>phone: </span>{{ $user->phone}}</div>
<div><span>photo: </span>{{ $user->photo}}</div>
<div><span>skills: </span>{{ $user->skills}}</div>
<a href="/account/{{ $user->id }}/edit">Edit account</a>
@endsection



@extends('layouts.app')

@section('content')


<img class="iphone" src="{{ URL::asset('img/iphone.png') }}" alt="no picture chosen yet">

    <div class="section1"><h4>QUICK INFO</h4>
        <div class="section1a">Meetup</div>
        <div class="section1b">Skill up</div>
    </div>


    <div class="section2"><h4>AMAZING FEATURES</h4>
    </div>

    <div class="section3">THANK YOU FOR USING THE APP
    <div class="containerbutton">
        <a class="btn btn-1">DOWNLOAD APP</a>
    </div>


    </div>

    <img class="iphone2" src="{{ URL::asset('img/iphone.png') }}" alt="no picture chosen yet">
    <div class="section4">CONTACT</div>

@endsection

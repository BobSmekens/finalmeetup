@extends('layouts.app')

@section('meetupLogo')
<h2>MEETUP</h2>   
@endsection

@section('content')


<img class="iphone" src="{{ URL::asset('img/iphone.png') }}" alt="no picture chosen yet">

    <div class="section1"><h4>QUICK INFO</h4>
        <div class="section1a">MEETUP<br><br>The app serves as a platform to meet other people and to do fun activities together. We hope this service will make it easier for people that seek company.</div>
        <div class="section1b">SKILLUP<br><br>As for"skillup" this section will allow people to connect who my want to learn or teach others a variety of skills. </div>
        <div class="section1c">A platform to engage with others in leisure activities or to learn new skills!<br>"meetup or skillup" the choice is yours!</div>
    </div>


    <div class="section2"><h4>AMAZING FEATURES</h4>
    </div>

    <div class="section3">
    <div class="containerbutton">
        <a class="btn btn-1">DOWNLOAD APP</a>
    </div>


    </div>

    <img class="iphone2" src="{{ URL::asset('img/iphone.png') }}" alt="no picture chosen yet">
    <div class="section4">CONTACT</div>

@endsection

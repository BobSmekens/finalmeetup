@extends('layouts.app')

@section('meetupLogo')
<h2>MEETUP</h2>   
@endsection

@section('content')


<img class="iphone" src="{{ URL::asset('img/iphone.png') }}" alt="no picture chosen yet">

    <div class="section1"><h4>QUICK INFO</h4>
        <div class="section1a">MEETUP<br><br>The app serves as a platform to meet other people and to do fun activities together. We hope this service will make it easier for people to connect with one another.</div>
        <div class="section1b">SKILLUP<br><br>As for"skillup" this section will allow people to get in contact with others to learn new skills or to teach them. </div>
        <div class="section1c">A platform to engage with others in leisure activities or to learn new skills!<br>"meetup or skillup" the choice is yours!</div>
    </div>


    <div class="section2"><h4>AMAZING FEATURES</h4>
        <ul>
            <li>MESSAGES</li>
            <li>CALENDAR</li>
            <li>ACTIVITIES</li>
            <li>SKILLS</li>
            <li>PERSONAL ACCOUNTS</li>
            <li>REVIEWS</li>
        </ul>
    </div>

    <div class="section3">
    <div class="containerbutton">
        <a class="btn btn-1">DOWNLOAD APP</a>
    </div>


    </div>

    <img class="iphone2" src="{{ URL::asset('img/iphone.png') }}" alt="no picture chosen yet">
    <div class="section4">CONTACT<br><br>Do you have any questions? Please do not hesitate to contact us.<br></div>

@endsection

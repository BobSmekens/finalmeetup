@extends('layouts.app')

@section('content-top')
    <div class="content-top section-flex">
        <h2 class="toggle-content">Tjillup</h2>
        <img class="chillup toggle-content" src="{{ URL::asset('img/birdup.png') }}" alt="no picture chosen yet">
    </div>
@endsection

@section('content-bottom')
    <div class="content-bottom section-flex">
        <div class="home-link-button">
            <p>Just want to hang? </p>
            <a href="/activities">
                <img class="home-link-image" src="{{ URL::asset('img/chillbird.png') }}" alt="">
                <h2> Chillup!</h2>  
            </a>
        </div>
        <div class="home-link-button">
            <p>Want to learn something?</p>
            <a href="/activities">
                <img class="home-link-image" src="{{ URL::asset('img/skillbird.png') }}" alt="">
                <h2> Skillup!</h2>  
            </a>
        </div>
        </div>
    </div>
@endsection

@section('fullscreen')

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
        <div><img src="https://img.icons8.com/color/48/000000/google-play.png"><input type="radio" id="play" name="drone" value="play"
         checked><label for="play"></label></div>
        <div><img src="https://img.icons8.com/color/48/000000/android-os.png"><input type="radio" id="android" name="drone" value="android"
         checked><label for="andriod"></label></div>
    </div>


    </div>

    <img class="iphone2" src="{{ URL::asset('img/iphone.png') }}" alt="no picture chosen yet">
    <div class="section4">CONTACT<br><br>Do you have any questions? Please do not hesitate to contact us.<br><br>Haagweg 1, 4814 GA Breda<br>North Brabant<br>meetup@skillup.com</div>

@endsection

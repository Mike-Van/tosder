@extends('layouts.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
@endsection

@section('content')
<div class="signin">
    <div class="filter">
    </div>
        <img src="../image/tour-guide-header.jpg" />
    <div class="more">
        <h1 style="margin-bottom:-10px">Find more
            <abbr class="let">clients </abbr>with us.</h1>
        <h1>Be our
            <abbr class="let">guide </abbr>to earn extra.</h1>
    </div>
</div>
<div class="namf">
    <h2>
        <abbr class="let">Earn</abbr> with
        <abbr class="let">TosDer</abbr>
    </h2>
    <form id="signup" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="role" value="guide" >
        <input type="text" required placeholder="First Name" name="firstName">
        <br>
        <input type="text" required placeholder="Last Name" name="lastName">
        <br>
        <input type="text" disabled class="tel" value="+855">
        <input type="text" required class="num" placeholder="XX-XXX-XXX" name="phone">
        <br>
        <input type="text" required class="em" placeholder="Email Address" name="email">
        <br>
        <p>I'll operate in</p>
        <select name="province_id" required>
            @foreach($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
        </select>
        <div class="upload">
            <p>Upload a picture of yourself here</p><br>
            <input type="file" required name="image">
        </div>
        <textarea required placeholder="Tell us something about yourself." name="about" id="" cols="27" rows="5"></textarea>
        <br>
        <input type="text" required placeholder="Username" name="username"><br>
        <input type="password" required placeholder="Password" name="password"><br>
        <input style="margin-bottom: 15px;" type="password" required placeholder="Confirm Password" name="password_confirmation">
        <br>
        <span>*** By clicking
                <abbr title="" class="let">"Sign Up"</abbr>, you had read and
                <br> agreed with our
                <abbr title="" class="let">
                    <u>terms of service</u>
                </abbr>.</span>
        <div class="suc">
            <a href="javascript:{}" onclick="document.getElementById('signup').submit(); return false;">Sign Up</a>
        </div>
        <br>
    </form>
    
</div>
<div class="main">
    <h1>Why
        <abbr class="let">work</abbr> with
        <abbr class="let">US</abbr> ?</h1>
    <center>
        <div class="row">
            <div class="col-6 col-md-4">
                <img src="image/icon-money.png" alt="">
                <p class="let">Earn More</p>
                <span>People go on trip everyday. With our big clients base. This means you will be able to get more clients.</span>
            </div>
            <div class="col-6 col-md-4">
                <img src="image/User_Experience-512.png" alt="">
                <p class="let">Enhanced Experience</p>
                <span>We, at TosDer, recognize the importance of user experience. That's why we can guarantee that our
                        UI is highly optimized for the best possible user experience, both clients and guide's. </span>
            </div>
            <div class="col-6 col-md-4">
                <img src="image/download.png" alt="">
                <p class="let">Easy & Convenience</p>
                <span>We handle all the booking and financing process for you. Just show up, and do your job. No more arguing
                        with clients.</span>
            </div>
        </div>
    </center>
    <div class="loook">
        <div class="row">
            <div class="col-4">
                <i><p class="lighter big">Not convinced yet?</p></i>
                <h2 class="bold">
                    <abbr class="let">Hear</abbr> what our
                    <abbr class="let">GUIDE</abbr> say about
                    <abbr class="let">US</abbr>
                </h2>
            </div>
            <div class="col">
                <img src="image/Koala.jpg" alt="">
                <div class="let namg">Mike Van</div>
                <div class="namh lighter">*joined 2 years ago</div>
                <hr><br>
                <span>"Being tour guide for Tos
                        <abbr class="let">Der</abbr>, was the best decision i ever made. I can now earn more money doing what i love"</span>
                <br>
                <br>
                <img src="image/Koala.jpg" alt="">
                <div class="let namg">Mike Van</div>
                <div class="namh lighter">*joined 2 years ago</div>
                <hr><br>
                <span>"Being tour guide for Tos
                        <abbr class="let">Der</abbr>, was the best decision i ever made. I can now earn more money doing what i love"</span>
            </div>
            <div class="col">
                <img src="image/Koala.jpg" alt="">
                <div class="let namg">Mike Van</div>
                <div class="namh lighter">*joined 2 years ago</div>
                <hr><br>
                <span>"Being tour guide for Tos
                        <abbr class="let">Der</abbr>, was the best decision i ever made. I can now earn more money doing what i love"</span>
                <br>
                <br>
                <img src="image/Koala.jpg" alt="">
                <div class="let namg">Mike Van</div>
                <div class="namh lighter">*joined 2 years ago</div>
                <hr><br>
                <span>"Being tour guide for Tos
                        <abbr class="let">Der</abbr>, was the best decision i ever made. I can now earn more money doing what i love"</span>
            </div>
        </div>
    </div>
</div>
<br>
@endsection

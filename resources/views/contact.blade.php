@extends('layouts.app') 

@section('stylesheet')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet"> 
@endsection 

@section('content')
<div class="con">
    <h3>Contact TosDer Agency!</h3>
</div>
<div class="support">
    <div class="row">
        <div class="col suq">
            <img src="../image/contact-us-support.png" alt="">
        </div>
        <div class="col sur">
            <h3 class="bold">Contact
                <abbr class="let">US</abbr>
            </h3>
            <span>Need assistance with your TosDer Packet? We'll get you the help you need.</span>
            <a href="#">Get started</a>
        </div>
    </div>
</div>
<div class="option optiom">
    <h4>More support option</h4>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <a href="#">Business, Tour Guide</a>
            <br>
            <br>
            <span>Small & medium packets, provide the best cost and travel, expert in tourist side.</span>
        </div>
        <div class="col-md-4">
            <a href="#">TosDer Packet</a>
            <br>
            <br>
            <span>Get help with TosDer Packet from our tour guide, or ask about the info of any tourist place.</span>
        </div>
        <div class="col-md-4">
            <a href="#">Contact TosDer Support</a>
            <br>
            <br>
            <span>Need service or support? Start your request online and we’ll find you a solution.</span>
        </div>
    </div>
</div>
@endsection

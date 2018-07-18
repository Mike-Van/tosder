@extends('layouts.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/pending.css') }}">
@endsection

@section('content')
    <section class="container-fluid">
        <div class="row">
            <aside class="col-4">
                <h3 style="text-align: center;">Pendding Jobs</h3>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item col">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pendding Jobs</a>
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Complete</a>
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Cancel</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div style="border: 1px solid #d2d2d2;">
                            <div class="title">
                                <div class="col-1">
                                    <h6>Nº</h6>
                                    <div>1</div>
                                </div>
                                <div class="col-5">
                                    <h6>Name</h6>
                                    <div>
                                        <img src="image/angkor-wat-temple-siem-reap-cambodia-4k-time-lapse_hlmnc_-y__F0000.png" />
                                        <span>Angkor Temples Tours</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h6>Detail</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Mr.XXXXXX</p>
                                            <p>4 Pax</p>
                                            <button class="btn btn-success">Complete</button>
                                        </div>
                                        <div class="col-6">
                                            <p>200,000 KHR</p>
                                            <p>15-May-18</p>
                                            <button class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div style="border: 1px solid #d2d2d2;">
                            <div class="title">
                                <div class="col-1">
                                    <h6>Nº</h6>
                                    <div>1</div>
                                </div>
                                <div class="col-5">
                                    <h6>Name</h6>
                                    <div>
                                        <img src="image/angkor-wat-temple-siem-reap-cambodia-4k-time-lapse_hlmnc_-y__F0000.png" />
                                        <span>Angkor Temples Tours</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h6>Detail</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Mr.XXXXXX</p>
                                            <p>4 Pax</p>
                                        </div>
                                        <div class="col-6">
                                            <p>200,000 KHR</p>
                                            <p>15-May-18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div style="border: 1px solid #d2d2d2;">
                            <div class="title">
                                <div class="col-1">
                                    <h6>Nº</h6>
                                    <div>1</div>
                                </div>
                                <div class="col-5">
                                    <h6>Name</h6>
                                    <div>
                                        <img src="image/angkor-wat-temple-siem-reap-cambodia-4k-time-lapse_hlmnc_-y__F0000.png" />
                                        <span>Angkor Temples Tours</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h6>Detail</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Mr.XXXXXX</p>
                                            <p>4 Pax</p>
                                        </div>
                                        <div class="col-6">
                                            <p>200,000 KHR</p>
                                            <p>15-May-18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </aside>
            <aside class="col-6">
                <h3 style="text-align: center;">All your tours package</h3>
                <div class="package">
                    <div class="header">
                        <div class="row">
                            <div class="md-form active-cyan active-cyan-2 mb-3 col-6">
                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                            </div>
                            <div style="text-align: right;" class="col-6">
                                <a href="">
                                    <i class="fa fa-plus"> Add Tour</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row tour-item">
                        <div class="col-3">
                            <a href="">
                                <img src="image/angkor-wat-temple-siem-reap-cambodia-4k-time-lapse_hlmnc_-y__F0000.png" />
                                <p>Angkor Temples Tours</p>
                                <span>From 800,000KHR</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <img src="image/angkor-wat-temple-siem-reap-cambodia-4k-time-lapse_hlmnc_-y__F0000.png" />
                                <p>Angkor Temples Tours</p>
                                <span>From 800,000KHR</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <img src="image/angkor-wat-temple-siem-reap-cambodia-4k-time-lapse_hlmnc_-y__F0000.png" />
                                <p>Angkor Temples Tours</p>
                                <span>From 800,000KHR</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <img src="image/angkor-wat-temple-siem-reap-cambodia-4k-time-lapse_hlmnc_-y__F0000.png" />
                                <p>Angkor Temples Tours</p>
                                <span>From 800,000KHR</span>
                            </a>
                        </div>
                        <!---->
                    </div>
                </div>
            </aside>
            <aside class="col-2">
                <div>
                    <h3>Your Profile</h3>
                </div>
                <div class="profile">
                    <div class="profile-picture">
                        <img src="image/angkor-wat-temple-siem-reap-cambodia-4k-time-lapse_hlmnc_-y__F0000.png" />

                    </div>
                    <div>
                        <span class="fa fa-star checked-star"></span>
                        <span class="fa fa-star checked-star"></span>
                        <span class="fa fa-star checked-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <i>69 Review</i>
                    </div>
                    <h3>About</h3>
                    <p>Tosder Tosder Tosder Tosder Tosder Tosder</p>
                    <div class="edit-profile">
                        <a href="">Edit Your Profile</a>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    {{--<section>--}}
        {{--<div class="row">--}}
            {{--<div class="col-4">--}}
                {{--<div>--}}
                    {{--<h3 style="text-align: center;">Pending Jobs</h3>--}}
                {{--</div>--}}
                {{--<div class="row heae">--}}
                    {{--<div class="col-sm-1 np">--}}
                        {{--<div>Nº</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-4 np">--}}
                        {{--<div border-right="none">Name</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-7 np">--}}
                        {{--<div>Details</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--@php--}}
                    {{--$i = 1;--}}
                {{--@endphp--}}
                {{--@foreach($bookings as $booking)--}}
                    {{--@if($booking->status == "ongoing" )--}}
                        {{--<div class="row heaf">--}}
                            {{--<div class="col-sm-1">--}}
                                {{--{{ $i++ }}--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<img src="/storage/{{ $booking->tour->latestTourImage->path }}" />--}}
                                {{--<span>{{ $booking->tour->name }}</span>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-6">--}}
                                        {{--<p>{{ $booking->customer_name }}</p>--}}
                                        {{--<p>{{ $booking->pax }}</p>--}}
                                        {{--<p class="completed-btn">--}}
                                            {{--<a href="/bookings/complete/{{ $booking->id }}">--}}
                                                {{--<span class="checked">&#9745;Complete</span>--}}
                                            {{--</a>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-6">--}}
                                        {{--<p>{{ $booking->grand_total }} KHR</p>--}}
                                        {{--<p>{{ $booking->trip_date }}</p>--}}
                                        {{--<p class="cancel-btn">--}}
                                            {{--<a href="/bookings/cancel/{{ $booking->id }}">--}}
                                                {{--<span class="cross">&#9932;Cancel</span>--}}
                                            {{--</a>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--</div>--}}
            {{--<div class="col-5">--}}
                {{--<div>--}}
                    {{--<h3 style="text-align: center;">All your tours package</h3>--}}
                {{--</div>--}}
                {{--<div class="package">--}}
                    {{--<div class="header">--}}
                        {{--<input type="search" placeholder="Search for your packages" />--}}
                        {{--<a href="searched.html">--}}
                            {{--<span class="fa fa-search btn-search"></span>--}}
                        {{--</a>--}}
                        {{--<a href="{{ route('tours.create') }}">--}}
                            {{--<span class="fa fa-plus"> Add Tour</span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--@foreach($tours as $tour)--}}
                            {{--<a href="{{ route('tours.edit', $tour->id) }}" style="margin-left: 15px;">--}}
                                {{--<div class="col">--}}
                                    {{--<img src="/storage/{{ $tour->latestTourImage->path }}" />--}}
                                    {{--<p>{{ $tour->name }}--}}
                                        {{--<br> From--}}
                                        {{--<abbr class="bold">{{ $tour->price }} KHR</abbr>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-2">--}}
                {{--<div>--}}
                    {{--<h3 style="text-align:center;">Your Profile</h3>--}}
                {{--</div>--}}
                {{--<div class="profile">--}}
                    {{--<div class="profile-picture">--}}
                        {{--<img src="/storage/{{ $user->imgPath }}" />--}}

                    {{--</div>--}}

                    {{--<div>--}}
                        {{--<span class="fa fa-star checked-star"></span>--}}
                        {{--<span class="fa fa-star checked-star"></span>--}}
                        {{--<span class="fa fa-star checked-star"></span>--}}
                        {{--<span class="fa fa-star"></span>--}}
                        {{--<span class="fa fa-star"></span>--}}
                        {{--<i class="lighter">69 Review</i>--}}
                    {{--</div>--}}

                        {{--<i>--}}
                            {{--<h4 class="let bold">About</h4>--}}
                        {{--</i>--}}
                        {{--<p>{{ $user->about }}</p>--}}
                    {{--<div class="edit-profile">--}}
                        {{--<a href="#">Edit Your Profile</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection

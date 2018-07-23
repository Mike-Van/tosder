@extends('layouts.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/pending.css') }}">
@endsection

@section('content')
    <section class="container-fluid custom-font">
        <div class="row p-0">
            <aside class="col-4">
                <h3 style="text-align: center;">Pending Jobs</h3>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item col">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending Jobs</a>
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
                            @php
                                $i = 1;
                            @endphp
                            @foreach($bookings as $booking)
                                @if($booking->status == "ongoing" )
                                    <div class="title">
                                        <div class="col-1">
                                            <h6>Nº</h6>
                                            <div>{{ $i++ }}</div>
                                        </div>
                                        <div class="col-5">
                                            <h6>Name</h6>
                                            <div>
                                                <img src="/storage/{{ $booking->tour->latestTourImage->path }}" />
                                                <span>{{ $booking->tour->name }}</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h6>Detail</h6>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <p>{{ $booking->customer_name }}</p>
                                                        <p>{{ $booking->pax }} Pax</p>
                                                    </div>
                                                    <div>
                                                        <p>{{ $booking->grand_total }} KHR</p>
                                                        <p>{{ $booking->trip_date }}</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button class="btn btn-success" onclick="window.location.replace('/bookings/complete/{{ $booking->id }}');">Complete</button>
                                                    <button class="btn btn-danger" onclick="window.location.replace('/bookings/cancel/{{ $booking->id }}');">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div style="border: 1px solid #d2d2d2;">
                            @php
                                $i = 1;
                            @endphp
                            @foreach($bookings as $booking)
                                @if($booking->status == "completed" )
                                    <div class="title">
                                        <div class="col-1">
                                            <h6>Nº</h6>
                                            <div>{{ $i++ }}</div>
                                        </div>
                                        <div class="col-5">
                                            <h6>Name</h6>
                                            <div>
                                                <img src="/storage/{{ $booking->tour->latestTourImage->path }}" />
                                                <span>{{ $booking->tour->name }}</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h6>Detail</h6>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <p>{{ $booking->customer_name }}</p>
                                                        <p>{{ $booking->pax }} Pax</p>
                                                    </div>
                                                    <div>
                                                        <p>{{ $booking->grand_total }} KHR</p>
                                                        <p>{{ $booking->trip_date }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div style="border: 1px solid #d2d2d2;">
                            @php
                                $i = 1;
                            @endphp
                            @foreach($bookings as $booking)
                                @if($booking->status == "canceled" )
                                    <div class="title">
                                        <div class="col-1">
                                            <h6>Nº</h6>
                                            <div>{{ $i++ }}</div>
                                        </div>
                                        <div class="col-5">
                                            <h6>Name</h6>
                                            <div>
                                                <img src="/storage/{{ $booking->tour->latestTourImage->path }}" />
                                                <span>{{ $booking->tour->name }}</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h6>Detail</h6>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <p>{{ $booking->customer_name }}</p>
                                                        <p>{{ $booking->pax }} Pax</p>
                                                    </div>
                                                    <div>
                                                        <p>{{ $booking->grand_total }} KHR</p>
                                                        <p>{{ $booking->trip_date }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
                                <a href="{{ route('tours.create') }}">
                                    <i class="fa fa-plus"> Add Tour</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row tour-item">
                        @foreach($tours as $tour)
                        <div class="col-3">
                            <a href="{{ route('tours.edit', $tour->id) }}">
                                <img src="/storage/{{ $tour->latestTourImage->path }}" />
                                <h6>{{ $tour->name }}</h6>
                                <p>From {{ $tour->price }}KHR</p>
                            </a>
                        </div>
                        @endforeach
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
                        <img src="/storage/{{ $user->imgPath }}" />
                    </div>
                    {{--<div>--}}
                        {{--<span class="fa fa-star checked-star"></span>--}}
                        {{--<span class="fa fa-star checked-star"></span>--}}
                        {{--<span class="fa fa-star checked-star"></span>--}}
                        {{--<span class="fa fa-star"></span>--}}
                        {{--<span class="fa fa-star"></span>--}}
                        {{--<i>69 Review</i>--}}
                    {{--</div>--}}
                    <h3>About</h3>
                    <p>{{ $user->about }}</p>
                    <div class="edit-profile">
                        <a href="">Edit Your Profile</a>
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection

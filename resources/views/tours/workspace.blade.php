@extends('layouts.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/pending.css') }}">
@endsection

@section('content')

    <section>
        <div class="row">
            <div class="col-4">
                <div>
                    <h3 style="text-align: center;">Pending Jobs</h3>
                </div>
                <div class="row heae">
                    <div class="col-sm-1 np">
                        <div>Nº</div>
                    </div>
                    <div class="col-sm-4 np">
                        <div border-right="none">Name</div>
                    </div>
                    <div class="col-sm-7 np">
                        <div>Details</div>
                    </div>
                </div>
                @php
                    $i = 1;
                @endphp
                @foreach($bookings as $booking)
                    @if($booking->status == "ongoing" )
                        <div class="row heaf">
                            <div class="col-sm-1">
                                {{ $i++ }}
                            </div>
                            <div class="col-sm-4">
                                <img src="/storage/{{ $booking->tour->latestTourImage->path }}" />
                                <span>{{ $booking->tour->name }}</span>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-6">
                                        <p>{{ $booking->customer_name }}</p>
                                        <p>{{ $booking->pax }}</p>
                                        <p class="completed-btn">
                                            <a href="/bookings/complete/{{ $booking->id }}">
                                                <span class="checked">&#9745;Complete</span>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p>{{ $booking->grand_total }} KHR</p>
                                        <p>{{ $booking->trip_date }}</p>
                                        <p class="cancel-btn">
                                            <a href="/bookings/cancel/{{ $booking->id }}">
                                                <span class="cross">&#9932;Cancel</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-5">
                <div>
                    <h3 style="text-align: center;">All your tours package</h3>
                </div>
                <div class="package">
                    <div class="header">
                        <input type="search" placeholder="Search for your packages" />
                        <a href="searched.html">
                            <span class="fa fa-search btn-search"></span>
                        </a>
                        <a href="{{ route('tours.create') }}">
                            <span class="fa fa-plus"> Add Tour</span>
                        </a>
                    </div>
                    <div class="row">
                        @foreach($tours as $tour)
                            <a href="{{ route('tours.edit', $tour->id) }}">
                                <div class="col">
                                    <img src="/storage/{{ $tour->latestTourImage->path }}" />
                                    <p>{{ $tour->name }}
                                        <br> From
                                        <abbr class="bold">{{ $tour->price }} KHR</abbr>
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <h3 style="text-align:center;">Your Profile</h3>
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
                        {{--<i class="lighter">69 Review</i>--}}
                    {{--</div>--}}

                        <i>
                            <h4 class="let bold">About</h4>
                        </i>
                        <p>{{ $user->about }}</p>
                    <div class="edit-profile">
                        <a href="#">Edit Your Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

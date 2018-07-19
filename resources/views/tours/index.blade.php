@extends('layouts.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/searched.css') }}">
@endsection

@section('content')
    <div>
        <div class="nice" style="background-image: url('/storage/{{ $province->imgPath }}');");>
            <h2 class="bold">Nice choice for a destination!!</h2>
            <h2 class="you bold">You're in
                <abbr class="let">{{ $province->name }}, Cambodia</abbr>
            </h2>
            <h2 class="found bold">We found these tours for you.</h2>
        </div>
        <section>
            <div class="row">
                <div class="col-6 col-md-4">
                    <h4 class="bold ">What type of tours are you looking for?</h4>
                    <form class="lighter" style="margin-left:15px" method="get" action="{{ route('allTours', $province_id) }}">
                        @csrf
                        <input type="radio" value="Historical and cultural sites" name="sortBy">Historical and cultural sites
                        <br>
                        <input type="radio" value="Natural and wilderness site" name="sortBy">Natural and wilderness site
                        <br>
                        <input type="radio" value="Chilling out and nightlife" name="sortBy">Chilling out and nightlife
                        <br>
                        <input type="radio" value="Others" name="sortBy">Others
                        <br>
                        <input type="submit" value="Find">
                    </form>
                    <h4 class="bold">Or Search with keywords below</h4>
                    <input size="35" class="search" type="text" placeholder="Eg: Angkor, Bike..etc">
                    <a href="descrip.html">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                <div class="col-12 col-md-8">
                    <h1 class="bold">Historical and cultural sites</h1>
                    <div class="row">
                        @foreach($tours as $tour)
                            @if($tour->category == "Historical and cultural sites")
                                <div class="col-3">
                                    <a href="{{ route('tours.show', $tour->id) }}">
                                        <img src="/storage/{{ $tour->latestTourImage->path }}" alt="">
                                        <span class="tours">{{ $tour->name }}</span><br>
                                        <span class="cast">From:
                                                <b>{{ $tour->price }}KHR</b>
                                            </span>
                                        <br>
                                        <i>
                                                <span class="guide">
                                                    <b>By:</b>
                                                    <abbr class="van">{{ $tour->guide->firstName }}</abbr>
                                                </span>
                                        </i>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <h1 class="bold">Nature, and wilderness sities</h1>
                    <div class="row">
                        @foreach($tours as $tour)
                            @if($tour->category == "Natural and wilderness site")
                                <div class="col-3">
                                    <a href="{{ route('tours.show', $tour->id) }}">
                                        <img src="/storage/{{ $tour->latestTourImage->path }}" alt="">
                                        <span class="tours">{{ $tour->name }}</span><br>
                                        <span class="cast">From:
                                                <b>{{ $tour->price }}KHR</b>
                                            </span>
                                        <br>
                                        <i>
                                                <span class="guide">
                                                    <b>By:</b>
                                                    <abbr class="van">{{ $tour->guide->firstName }}</abbr>
                                                </span>
                                        </i>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <h1 class="bold">Chilling out, and nightlife</h1>
                    <div class="row">
                        @foreach($tours as $tour)
                            @if($tour->category == "Chilling out and nightlife")
                                <div class="col-3">
                                    <a href="{{ route('tours.show', $tour->id) }}">
                                        <img src="/storage/{{ $tour->latestTourImage->path }}" alt="">
                                        <span class="tours">{{ $tour->name }}</span><br>
                                        <span class="cast">From:
                                                <b>{{ $tour->price }}KHR</b>
                                            </span>
                                        <br>
                                        <i>
                                                <span class="guide">
                                                    <b>By:</b>
                                                    <abbr class="van">{{ $tour->guide->firstName }}</abbr>
                                                </span>
                                        </i>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <h1 class="bold">Others</h1>
                    <div class="row">
                        @foreach($tours as $tour)
                            @if($tour->category == "Others")
                                <div class="col-3">
                                    <a href="{{ route('tours.show', $tour->id) }}">
                                        <img src="/storage/{{ $tour->latestTourImage->path }}" alt="">
                                        <span class="tours">{{ $tour->name }}</span><br>
                                        <span class="cast">From:
                                                <b>{{ $tour->price }}KHR</b>
                                            </span>
                                        <br>
                                        <i>
                                                <span class="guide">
                                                    <b>By:</b>
                                                    <abbr class="van">{{ $tour->guide->firstName }}</abbr>
                                                </span>
                                        </i>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

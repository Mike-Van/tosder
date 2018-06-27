@extends('layouts.app')

@section('stylesheet')
    <link href="{{ asset('css/descrip.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section>
        <div class="row">
            <div class="col-4">
                <h2 class="let bold lox">{{ $tour->name }}</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @php($i = 1)
                        @foreach($tourImages as $tourImage)
                            @if($i == 1)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/storage/{{ $tourImage->path }}" alt="{{ $i }} slide">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/storage/{{ $tourImage->path }}" alt="{{ $i }} slide">
                                </div>
                            @endif
                            @php($i++)
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <span class="lighter lox">From
                        <abbr class="let bold">{{ $tour->price }} KHR</abbr>/Pax
                        <i class="low"> &nbsp;&nbsp;*Low Price Guaranteed</i>
                    </span>
                <aside>
                    <form method="post" action="{{ route('bookings.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-4 lighter">
                                <label>Full Name:</label>
                                <br>
                                <label>Phone Number:</label>
                                <br>
                                <label>Email:</label>
                                <br>
                                <label>Number of Pax:</label>
                                <br>
                                <label>Trip Date:</label>
                                <br>
                                <label>Pick Up Location:</label>
                                <br>
                            </div>
                            <div class="col-8">
                                <input required type="text" name="customer_name" id="">
                                <br>
                                <input required type="text" name="customer_phone" id="">
                                <br>
                                <input required type="text" name="customer_email" id="">
                                <br>
                                <input required type="text" name="pax" id="">
                                <br>
                                <input required type="text" name="trip_date" id="" data-provide="datepicker">
                                <br>
                                <input required type="text" name="pick_up" id="">
                                <br>
                                <input type="hidden" value="{{ $tour->id }}" name="tour_id">
                                <input type="hidden" value="{{ $tour->guide->id }}" name="guide_id">
                            </div>
                        </div>
                        <div class="book">
                            <i>
                                <lable class="bold let">Grand Total:</lable>
                            </i>
                            <input type="text" disabled>
                        </div>
                        <div class="shoq">
                            <i class="fas fa-cart-arrow-down"></i>
                            <input type="submit" value="Book">
                        </div>
                    </form>
                </aside>
            </div>
            <div class="col-6">
                <section class="fi">
                    <h3 class="let bold">Overview</h3>
                    <article>{!! $tour->overview !!}
                    </article>
                </section>
                <section>
                    <h3 class="let bold">Activities</h3>
                    <article>{!! $tour->activity !!}</article>
                </section>
                <section>
                    <h3 class="let bold">Inclusion, and Exclusion</h3>
                    <article>
                        <b>
                            <i class="bold">Inclusion:</i>
                        </b>
                        {!! $tour->inclusion !!}
                        <b>
                            <i class="bold">Exclusion:</i>
                        </b>
                        {!! $tour->exclusion !!}
                    </article>
                </section>
                <section>
                    <h3 class="let bold">Additional Policies</h3>
                    <article>{!! $tour->policies !!}</article>
                </section>
            </div>
            <div class="col-2">
                <center>
                    <h4 class="bold">This trip is organized by:
                        <br>
                        <br>
                        <abbr class="let">
                            <i>{{ $tour->guide->firstName }} {{ $tour->guide->lastName }}</i>
                        </abbr>
                        <br>
                        <br>
                        <img src="/storage/{{ $tour->guide->imgPath }}">
                        <br>
                        <br>
                        <abbr class="let">
                            <i>About</i>
                        </abbr>
                    </h4>
                </center>
                <center>
                    <div class="des">
                            <span class="lighter">{{ $tour->guide->about }}</span>

                    </div>
                    <i>
                        <h4 class="let bold">Ratings & Reviews</h4>
                    </i>
                </center>
                <form method="post" action="{{ route('reviews.store') }}">
                    @csrf
                    <input type="hidden" name="tour_id" value="{{ $tour->id }}" />
                    <select required name="rating">
                        <option value="5" selected>I give this 5 of 5 stars.</option>
                        <option value="4">I give this 4 of 5 stars.</option>
                        <option value="3">I give this 3 of 5 stars.</option>
                        <option value="2">I give this 2 of 5 stars.</option>
                        <option value="1">I give this 1 of 5 star.</option>
                    </select>
                    <br>
                    <input required type="text" name="customer_name" id="" placeholder="Tell us your name">
                    <br>
                    <textarea required id="" rows="5" name="details" placeholder="Summary your experience"></textarea>
                    <br>
                    <input class="submir" type="submit" value="Submit">
                </form>
                @include('partials.reviews')
            </div>
        </div>
    </section>
@endsection

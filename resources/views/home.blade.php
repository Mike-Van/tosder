@extends('layouts.app')

@section('nav1')
    id = "home"
@endsection

@section('content')

<?php
    if(isset($_GET['province_id']))
        return redirect();
?>
<div class="bodz">
    <section>
        <div class="find">
            <h1>Let
                <abbr class="let">US</abbr> find you your
                <abbr class="let">TOUR</abbr> today</h1>
            <h1 class="but">But first, tell us
                <abbr class="let">WHERE</abbr> you're heading</h1>
            <form id="find" method="POST" action="{{ route('findProvince') }}">
                @csrf
                <div class="siem">
                    <i class="fas fa-compass"></i>
                    <input style="padding-left:5px" size="66" id="province_id" class="search" list="provinces" name="province_id" placeholder="Siem Reap, Sihanouk Ville...etc or click on location icon to let us locate you"
                    />
                    <datalist id="provinces">
                        @foreach($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="tour">
                    <a onclick="document.getElementById('find').submit()" type="button" href="#">Find my tours</a>
                    <i class="fas fa-search"></i>
                </div>
            </form>
        </div>
        <div class="why">
            <h1>Why
                <abbr class="bcuz">US</abbr>? Because
                <abbr class="bcuz">WHY NOT</abbr> !</h1>
        </div>
    </section>
    <div class="infu">
        <div class="row">
            <div class="col-6">
                <img src="image/Tour.jpg">
            </div>
            <div class="col-6">
                <h2>VARIETIES OF TOURS</h2>
                <span>Enjoy some of the greatest local tourism destinations with our wide selections of local tour packages.
                        You'll always have some somewhere to go, and something to enjoy.</span>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h2>EASY, FAST, CONVENIENCE</h2>
                <span>All the process, starting from finding your tours to booking and to payment, are all automated and
                        can be done from your phone, ANYTIME, ANYWHERE.</span>
            </div>
            <div class="col-6">
                <img src="image/cell-phone-770.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="image/group-travel-family-trip-planner-app-HR.jpg" height="200px" width="621px">
            </div>
            <div class="col-6">
                <h2>GREAT EXPERIENCE GUARANTEED</h2>
                <span>Thanks to our wonderful and expert tour guider, you can experience trips like never before. Learn
                        about the rich history behind your favorite destinations.</span>
            </div>
        </div>
    </div>
</div>

{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
--}}
@endsection

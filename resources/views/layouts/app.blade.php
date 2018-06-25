<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{ asset('css/tosder.css') }}">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-5.0.13/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css') }}">
    @yield('stylesheet')
</head>
<body>
    <div class="container-fluid">
        {{-- header content --}}
        <header>
            <div class="row">
                <div class="col-12 col-md-8">
                    <a href="/">
                        <img src="/image/logo.PNG">
                    </a>
                    @if(isset($onGuest))
                        <div class="locat">
                            <a href="/tours/index/{{ $province_id }}">
                                <i class="fas fa-compass"></i>
                                <p>&nbsp;{{ $province->name }}</p>
                            </a>
                        </div>
                    @else
                        <ul>
                            <li>
                                <a href="index.html" id="home">Home</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    @guest
                        <a href="{{ route('register') }}" class="become">Become our guide</a>
                    @else
                        <a href="{{ route('tours.index') }}" class="become">My Workspace</a>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->firstName }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </header>

        {{-- body content --}}
        @yield('content')

        {{-- footer content --}}
        <footer>
            <div class="row">
                <div class="col-6 col-md-4">
                    <h1 class="bold">FOLLOW
                        <abbr class="let">US</abbr> ON
                        <abbr class="let">SOCIAL MEDIA</abbr>
                    </h1>
                    <div class="face">
                        <a href="#" class="book">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="ig">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="you">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="pint">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <img src="/image/logo.PNG">
                    <br>
                    <span>&copy; 2018 TosDer All right reserved.</span>
                </div>
                <div class="col-6 col-md-4">
                    <h5 class="bold">CURRENCY:</h5>
                    <form>
                        <select name="color">
                            <option value="dollar" selected>USD</option>
                            <option value="rile">KHR</option>
                            <option value="bath">BTH</option>
                            <option value="dong">DON</option>
                            <option value="sgd">SGD</option>
                            <option value="yan">YAN</option>
                        </select>
                    </form>
                    <br>
                    <div class="title">
                        <span class="lighter">**The
                            <abbr class="let">PRICE</abbr> is
                            <abbr class="let">SUBJECTED TO CHANGE</abbr>
                        </span>
                        <span class="lighter">according to actual currency value.</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        (function() {
            $('.datepicker').datepicker({

            });
        })
    </script>
</body>
</html>

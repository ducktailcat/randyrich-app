<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $desc ?? 'Your number one source for 1950s Rockabilly Guitar lessons' }}">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">  

    <title> Randy Rich - {{  $metaTitle ?? 'Rockabilly Guitar Lessons, Shows and Records' }}</title>

    <link href="/css/main.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

    </style>
</head>

<body class="antialiased">
    <div class="page">
        <header>
            <div class="header-top">
                <div class="header-left">
                    <img src="/img/Randy_Head.png" />
                </div>
                <div class="header-title">
                    <div id="header-top">
                        <span class="stars stars-left">
                            <font-awesome-icon icon="star" />
                        </span>
                        <h5> SPEZIALIZED IN 1950s ROCK'N'ROLL</h5>
                        <span class="stars stars-right">
                            <font-awesome-icon icon="star" />
                        </span>
                    </div>
                    <h1>RANDY RICH</h1>
                    <h5 id="header-bottom">
                        YOUR ONLINE SOURCE FOR ROCKABILLY GUITAR LESSONS
                    </h5>
                </div>
                <div class="header-date-container">
                    <div class="header-date">
                        <h4 class="header-month">{{ $month }}</h4>
                        <div class="header-day">{{ $day }}</div>
                        <h5 class="header-weekday">{{ $weekday }}</h5>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <label for="nav-toggle" class="nav-toggle-label"><span></span></label>
                <input type="checkbox" id="nav-toggle" class="nav-toggle" />
                <ul>
                    <li><a class="{{ (request()->segment(1) == '' ? 'active' : '') }}" href="/">HOME</a></li>
                    <li><a class="{{ (request()->segment(1) == 'gigs' ? 'active' : '') }}" href="/gigs">GIGS</a></li>
                    <li><a class="{{ (request()->segment(1) == 'shop' ? 'active' : '') }}" href="https://randyrich.shop">SHOP</a></li>
                    <li><a class="{{ (request()->segment(1) == 'contact' ? 'active' : '') }}" href="/contact">CONTACT</a></li>
                    <li><a class="{{ (request()->segment(1) == 'music' ? 'active' : '') }}" href="/music">MUSIC</a></li>
                    <li><a class="{{ (request()->segment(1) == 'lessons' ? 'active' : '') }}" href="/lessons">GUITAR LESSONS</a></li>
                    <li><a class="{{ (request()->segment(1) == 'bands' ? 'active' : '') }}" href="/bands">BANDS</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer>
            <nav class="footer-menu">
                <ul>
                    <li><a href="/impressum">Impressum</a></li>
                    <li><a href="/gigs">Gigs</a></li>
                    <li><a href="https://shop.randyrich.de">Shop</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/music">Music</a></li>
                    <li><a href="/lessons">Guitar Lessons</a></li>
                    <li><a href="/bands">Bands</a></li>
                </ul>
            </nav>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('js/randy.js') }}"></script>

</html>

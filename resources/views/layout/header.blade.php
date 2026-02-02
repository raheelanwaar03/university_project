<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Champions</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="{{ asset('assets/logo/champions.png') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/logo/champions.png') }}" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select2.css') }}" />
    <link href="{{ asset('assets/css/jarallax.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/venobox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>

    {{-- component --}}

    <x-alert />

    <!-- Header Start -->
    <header class="header header-football">

        <!-- Navigation Menu Start -->
        <div class="offcanvas offcanvas-top bg-info" id="offcanvas-search" data-bs-scroll="true">

        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container px-lg-0">
                <a class="navbar-brand" href="#"><img src="{{ asset('assets/logo/champions.png') }}"
                        alt="Logo" height="80px" width="80px" /></a>
                <button class="navbar-toggler offcanvas-nav-btn" type="button">
                    <span class="feather-icon icon-menu"></span>
                </button>
                <div class="offcanvas offcanvas-start offcanvas-nav">
                    <div class="offcanvas-header">
                        <a href="{{ url('/') }}" class="text-inverse"><img
                                src="{{ asset('assets/logo/champions.png') }}" alt="Logo" /></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0 align-items-center">
                        <ul class="navbar-nav mx-auto align-items-lg-center">
                            <li class="nav-item dropdown">
                                <a href="{{ url('/') }}" role="button">Home</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('Event') }}" class="nav-link">Events</a></li>
                            <li class="nav-item"><a href="{{ route('Matches') }}" class="nav-link">Matches</a></li>
                            <li class="nav-item"><a href="{{ route('Team') }}" class="nav-link">Team</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ContactUs') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

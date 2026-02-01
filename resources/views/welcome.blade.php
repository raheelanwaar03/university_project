@extends('layout.app')

@section('content')
<!-- Golf Banner Section End -->
<div class="football-banner position-relative"
    style="background-image: url('{{ asset('assets/images/gray-bg2.png') }}')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="banner-txt">
                    <div class="heading-box mb-4">
                        <img src="{{ asset('assets/images/football-mini.jpg') }}" alt=""
                            class="img-fluid d-none d-sm-block rounded-4 align-self-start mt-2" />
                        <h1 class="text-uppercase">Football is a Game with <span class="color">happiness</span>
                        </h1>
                    </div>
                    <p>
                        The best offense is a good defense. Play for the love of the game We’re all in this together
                        Try and try
                        and you will get success Once
                        you succeed, you will enjoyAware with the tricks.
                    </p>
                    <div class="banner-cta mt-5">
                        <a class="my-video-links btn play-btn" data-vbtype="video"
                            href="https://www.youtube.com/watch?v=ZLyzIG0KHAA">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                viewBox="0 0 48 48" fill="none">
                                <circle cx="24" cy="24" r="24" fill="#16C7B4" />
                                <path
                                    d="M32.5 23.134C33.1667 23.5189 33.1667 24.4811 32.5 24.866L20.5 31.7942C19.8333 32.1791 19 31.698 19 30.9282L19 17.0718C19 16.302 19.8333 15.8209 20.5 16.2058L32.5 23.134Z"
                                    fill="white" />
                            </svg>
                            Online Streaming</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="football-media">
                    <img src="{{ asset('assets/images/ball-man.png') }}" alt=""
                        class="img-fluid jarallax" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Golf Banner Section End -->

<!-- Feature Section Start -->
<section class="feature-sec2 sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h2 class="sec-title line">Fitness is ultimate goal</h2>
                <p class="wow fadeInUp">Provide a comprehensive directory of golf courses, including details such
                    as location,
                    course layout, facilities, and user reviews.</p>
            </div>
        </div>
        <div class="row mt-5 feature-wrap">
            <div class="col-lg-3 col-sm-6">
                <div class="feature-entry2 border text-center rounded wow fadeInUp">
                    <span class="icon-sm icon-soccer rounded-2 shadow mb-2"> </span>
                    <h3 class="text-uppercase my-3">Training Grounds</h3>
                    <p>Duis gravida augu dignissim felis posuere quis. Integ ante urna gravida nec</p>
                    <a class="btn btn-sky text-info" href="#">Explore Now</a>
                </div>
            </div>
            <!--  Feature Entry End -->
            <div class="col-lg-3 col-sm-6">
                <div class="feature-entry2 border text-center rounded wow fadeInUp" data-wow-delay=".2s">
                    <span class="icon-sm icon-jersy rounded-2 shadow mb-2"> </span>
                    <h3 class="text-uppercase my-3">Player Lounge</h3>
                    <p>Duis gravida augu dignissim felis posuere quis. Integ ante urna gravida nec</p>
                    <a class="btn btn-sky text-info" href="#">Explore Now</a>
                </div>
            </div>
            <!--  Feature Entry End -->
            <div class="col-lg-3 col-sm-6">
                <div class="feature-entry2 border text-center rounded wow fadeInUp" data-wow-delay=".4s">
                    <span class="icon-sm icon-glove rounded-2 shadow mb-2"> </span>
                    <h3 class="text-uppercase my-3">Medical and Rehab</h3>
                    <p>Duis gravida augu dignissim felis posuere quis. Integ ante urna gravida nec</p>
                    <a class="btn btn-sky text-info" href="#">Explore Now</a>
                </div>
            </div>
            <!--  Feature Entry End -->
            <div class="col-lg-3 col-sm-6">
                <div class="feature-entry2 border text-center rounded wow fadeInUp" data-wow-delay=".6s">
                    <span class="icon-sm icon-shoe rounded-2 shadow mb-2"> </span>
                    <h3 class="text-uppercase my-3">Youth Academy</h3>
                    <p>Duis gravida augu dignissim felis posuere quis. Integ ante urna gravida nec</p>
                    <a class="btn btn-sky text-info" href="#">Explore Now</a>
                </div>
            </div>
            <!--  Feature Entry End -->
        </div>
    </div>
</section>
<!-- Feature Section End -->

<!-- Video Section Start -->
<section class="video-sec2 sec-padding bg-mute">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="video-txt">
                    <h2 class="sec-title line-left">football is everything</h2>
                    <p class="wow fadeInUp">
                        Provide a comprehensive directory of golf courses, including details such as location,
                        course layout,
                        facilities, and user reviews.
                        Because good passion gives you happiness perfect dedication gives you success
                    </p>
                    <div class="d-sm-flex my-5 wow fadeInUp" data-wow-delay=".2s">
                        <img src="{{ asset('assets/images/football2.jpg') }}" alt=""
                            class="img-fluid rounded" />
                        <div class="video-s-txt ms-sm-4 mt-4 mt-sm-0">
                            <h4 class="text-uppercase">Life is short, Play Hard!</h4>
                            <p>
                                Provide a comprehensive directory golf courses, including details such as location,
                                course layout,
                                facilities, and user reviews.
                            </p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-sky text-white wow fadeInUp" data-wow-delay=".4s">Learn more
                        us</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="video-box d-flex justify-content-between text-end position-relative">
                    <img class="img-fluid" src="{{ asset('assets/images/video1.jpg') }}" alt="" />
                    <img class="img-fluid d-none d-sm-block" src="{{ asset('assets/images/video2.jpg') }}"
                        alt="" />
                    <a class="video-popup" data-vbtype="video"
                        href="https://www.youtube.com/watch?v=QkZbYKn7noY"><i
                            class="feather-icon icon-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Section End -->

<!-- Matches Section Start -->
<section class="match-section sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h2 class="sec-title line">Upcoming Matches</h2>
                <p class="wow fadeInUp">Provide a comprehensive directory of golf courses, including details such
                    as location,
                    course layout, facilities, and user reviews.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div
                    class="single-match d-md-flex border rounded-4 justify-content-between align-items-center mb-4 wow fadeInUp">
                    <div class="match-info">
                        <p><i class="feather-icon icon-calendar me-2"></i>13 Sep, 2023</p>
                        <h3 class="text-uppercase">Donate to Elevate Impact</h3>
                        <p><i class="feather-icon icon-map-pin me-2"></i>Willowbrook Park - Greenwood</p>
                    </div>
                    <div class="team-logo d-flex justify-content-between align-items-center">
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/images/team1.png') }}"
                                alt="" /></a>
                        <span class="versus">VS</span>
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/images/team2.png') }}"
                                alt="" /></a>
                    </div>
                    <div class="match-ticket">
                        <a href="#" class="btn btn-dark">Get Ticket</a>
                    </div>
                </div>
                <!-- Single Match End -->
                <div class="single-match d-md-flex border rounded-4 justify-content-between align-items-center mb-4 wow fadeInUp"
                    data-wow-delay=".2s">
                    <div class="match-info">
                        <p><i class="feather-icon icon-calendar me-2"></i>13 Sep, 2023</p>
                        <h3 class="text-uppercase">Donate to Elevate Impact</h3>
                        <p><i class="feather-icon icon-map-pin me-2"></i>Willowbrook Park - Greenwood</p>
                    </div>
                    <div class="team-logo d-flex justify-content-between align-items-center">
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/images/team3.png') }}"
                                alt="" /></a>
                        <span class="versus">VS</span>
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/images/team4.png') }}"
                                alt="" /></a>
                    </div>
                    <div class="match-ticket">
                        <a href="#" class="btn btn-dark">Get Ticket</a>
                    </div>
                </div>
                <!-- Single Match End -->
                <div class="single-match d-md-flex border rounded-4 justify-content-between align-items-center wow fadeInUp"
                    data-wow-delay=".4s">
                    <div class="match-info">
                        <p><i class="feather-icon icon-calendar me-2"></i>13 Sep, 2023</p>
                        <h3 class="text-uppercase">Donate to Elevate Impact</h3>
                        <p><i class="feather-icon icon-map-pin me-2"></i>Willowbrook Park - Greenwood</p>
                    </div>
                    <div class="team-logo d-flex justify-content-between align-items-center">
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/images/team5.png') }}"
                                alt="" /></a>
                        <span class="versus">VS</span>
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/images/team6.png') }}"
                                alt="" /></a>
                    </div>
                    <div class="match-ticket">
                        <a href="#" class="btn btn-dark">Get Ticket</a>
                    </div>
                </div>
                <!-- Single Match End -->
            </div>
        </div>
    </div>
</section>
<!-- Matches Section End -->

<!-- Team Section Start -->
<section class="team-sec sec-padding bg-mute">
    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-6 mx-auto text-center">
                <h2 class="sec-title line">Professional Players</h2>
                <p class="wow fadeInUp">Provide a comprehensive directory of golf courses, including details such
                    as location,
                    course layout, facilities, and user reviews.</p>
            </div>
        </div>
        <div class="row gy-5 gy-md-0 mt-5">
            <div class="col-md-4">
                <div class="team-member text-center">
                    <div class="team-img mb-4">
                        <img class="img-fluid" src="{{ asset('assets/images/team-m3.png') }}" alt="" />
                    </div>
                    <h3 class="text-uppercase mb-0"><a href="#">Andrew Jonas</a></h3>
                    <p>Football Coach</p>
                    <div class="social-share">
                        <a href="#"><i class="feather-icon icon-twitter"></i></a>
                        <a href="#"><i class="feather-icon icon-linkedin"></i></a>
                        <a href="#"><i class="feather-icon icon-instagram"></i></a>
                        <a href="#"><i class="feather-icon icon-facebook"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member End -->
            <div class="col-md-4">
                <div class="team-member text-center">
                    <div class="team-img mb-4">
                        <img class="img-fluid" src="{{ asset('assets/images/team-m1.png') }}" alt="" />
                    </div>
                    <h3 class="text-uppercase mb-0"><a href="#">Liolen Alice</a></h3>
                    <p>Football Coach</p>
                    <div class="social-share">
                        <a href="#"><i class="feather-icon icon-twitter"></i></a>
                        <a href="#"><i class="feather-icon icon-linkedin"></i></a>
                        <a href="#"><i class="feather-icon icon-instagram"></i></a>
                        <a href="#"><i class="feather-icon icon-facebook"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member End -->
            <div class="col-md-4">
                <div class="team-member text-center">
                    <div class="team-img mb-4">
                        <img class="img-fluid" src="{{ asset('assets/images/team-m2.png') }}" alt="" />
                    </div>
                    <h3 class="text-uppercase mb-0"><a href="#">Xavier Blackwood</a></h3>
                    <p>Football Coach</p>
                    <div class="social-share">
                        <a href="#"><i class="feather-icon icon-twitter"></i></a>
                        <a href="#"><i class="feather-icon icon-linkedin"></i></a>
                        <a href="#"><i class="feather-icon icon-instagram"></i></a>
                        <a href="#"><i class="feather-icon icon-facebook"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member End -->
        </div>
    </div>
</section>
<!-- Team Section End -->
@endsection

@extends('layout.app')

@section('content')
    <section class="promo-sec position-relative jarallax"
        style="background-image: url('{{ asset('assets/images/promo-sec.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-txt">
                        <h1 class="text-uppercase text-info mt-3 mb-5 text-center">Event Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Event Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Section End -->

    <!-- Event Details Section Start -->
    <section class="event-details-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-media">
                        <img class="img-fluid" src="{{ asset('assets/images/event-details.jpg') }}" alt="">
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <div class="event-details">
                                <h2>Event Description</h2>
                                <p>Technological innovations have revolutionized athlete training and performance analysis.
                                    Athletes now have access to
                                    wearable devices that monitor various metrics like heart rate, speed, and distance
                                    covered
                                    during training. This data
                                    helps coaches and athletes tailor training regimens to improve performance and reduce
                                    the
                                    risk of injuries.</p>
                                <h2>Event content</h2>
                                <p>The Kickoff Classic brings together two teams with a storied history of fierce
                                    competition
                                    and nail-biting encounters.
                                    Each team is driven by a burning desire to outplay the other and secure bragging rights
                                    in
                                    this electrifying battle.
                                </p>
                                <p>Fans are not just spectators; they're an integral part of the game! The atmosphere will
                                    be
                                    electric as the fans rally
                                    behind their respective teams, chanting anthems and waving flags. This passionate
                                    display of
                                    support promises to create
                                    an unforgettable experience for everyone in attendance.</p>
                                <ul>
                                    <li>Major tournaments in arenas, attracting huge in-person & online audiences</li>
                                    <li>Informal tournaments leading to organized leagues and professional competitions</li>
                                    <li>Scholarships offered by educational institutions for e-sports</li>
                                    <li>Influencing traditional sports and engaging diverse bringing people audiences</li>
                                </ul>
                                <div class="players-wrap  border-top pt-5">
                                    <h2>Our Players</h2>
                                    <div class="our-players d-sm-flex g-4 flex-wrap justify-content-between mt-5">
                                        <div class="event-player text-center">
                                            <div class="player-media rounded-circle mb-4">
                                                <img class="img-fluid" src="{{ asset('assets/images/player1.png') }}"
                                                    alt="Player">
                                            </div>
                                            <h4><a href="single-player.html">John Thompson</a></h4>
                                        </div>
                                        <div class="event-player text-center">
                                            <div class="player-media rounded-circle mb-4">
                                                <img class="img-fluid" src="{{ asset('assets/images/player2.png') }}"
                                                    alt="Player">
                                            </div>
                                            <h4><a href="single-player.html">Joanna Rose</a></h4>
                                        </div>
                                        <div class="event-player text-center">
                                            <div class="player-media rounded-circle mb-4">
                                                <img class="img-fluid" src="{{ asset('assets/images/player3.png') }}"
                                                    alt="Player">
                                            </div>
                                            <h4><a href="single-player.html">Joseph Rao</a></h4>
                                        </div>
                                        <div class="event-player text-center">
                                            <div class="player-media rounded-circle mb-4">
                                                <img class="img-fluid" src="{{ asset('assets/images/player4.png') }}"
                                                    alt="Player">
                                            </div>
                                            <h4><a href="single-player.html">Rafael Thompson</a></h4>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="event-sidebar sidebar ps-4 ps-md-0 mt-5 mt-lg-0">
                                <div class="widget">
                                    <div class="widget-inner p-4 rounded-2">
                                        <div class="event-item d-flex">
                                            <span class="icon-sm rounded-3 bg-primary flex-shrink-0">
                                                <img src="{{ asset('assets/images/icons/smartwatch.png') }}" alt="">
                                            </span>
                                            <div class="ms-3">
                                                <h4 class="text-uppercase">Start & End Time</h4>
                                                <p>Kickoff Classic Soccer Football Match 2023</p>
                                            </div>
                                        </div> <!-- Item End -->

                                        <div class="event-item d-flex">
                                            <span class="icon-sm rounded-3 bg-primary flex-shrink-0">
                                                <img src="{{ asset('assets/images/icons/jersey.png') }}" alt="">
                                            </span>
                                            <div class="ms-3">
                                                <h4 class="text-uppercase">Match Name</h4>
                                                <p>10:00 AM - 02:00 PM Thursday, June 03, 2021</p>
                                            </div>
                                        </div> <!-- Item End -->
                                        <div class="event-item d-flex align-items-top">
                                            <span class="icon-sm rounded-3 bg-primary flex-shrink-0">
                                                <img src="{{ asset('assets/images/icons/map.png') }}" alt="">
                                            </span>
                                            <div class="ms-3">
                                                <h4 class="text-uppercase">Locations</h4>
                                                <p>7504 Calvin Cuevas Rd, Gulfport, MS, 39503</p>
                                            </div>
                                        </div>
                                        <div class="event-item d-flex align-items-top">
                                            <div class="ms-3">
                                                <a href="{{ route('register') }}" class="btn btn-primary">Add Team</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div> <!-- Event Sidebar End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

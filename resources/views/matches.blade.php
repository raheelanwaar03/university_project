@extends('layout.app')

@section('content')
    <section class="promo-sec position-relative jarallax"
        style="background-image: url('{{ asset('assets/images/promo-sec.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-txt">
                        <h1 class="text-uppercase text-info mt-3 mb-5 text-center">Matches</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Champions</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Match</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Section End -->

    <!-- League Section Start -->
    <section class="league-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-md-12">
                    <div class="league-wrap">
                        <section class="match-section sec-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 mx-auto text-center">
                                        <h2 class="sec-title line">Upcoming Matches</h2>
                                        <p class="wow fadeInUp">Provide a comprehensive directory of golf courses, including
                                            details such
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
                                                <p><i class="feather-icon icon-map-pin me-2"></i>Willowbrook Park -
                                                    Greenwood</p>
                                            </div>
                                            <div class="team-logo d-flex justify-content-between align-items-center">
                                                <a href="#"><img class="img-fluid"
                                                        src="http://university_project.test/assets/images/team1.png"
                                                        alt="" /></a>
                                                <span class="versus">VS</span>
                                                <a href="#"><img class="img-fluid"
                                                        src="http://university_project.test/assets/images/team2.png"
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
                                                <p><i class="feather-icon icon-map-pin me-2"></i>Willowbrook Park -
                                                    Greenwood</p>
                                            </div>
                                            <div class="team-logo d-flex justify-content-between align-items-center">
                                                <a href="#"><img class="img-fluid"
                                                        src="http://university_project.test/assets/images/team3.png"
                                                        alt="" /></a>
                                                <span class="versus">VS</span>
                                                <a href="#"><img class="img-fluid"
                                                        src="http://university_project.test/assets/images/team4.png"
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
                                                <p><i class="feather-icon icon-map-pin me-2"></i>Willowbrook Park -
                                                    Greenwood</p>
                                            </div>
                                            <div class="team-logo d-flex justify-content-between align-items-center">
                                                <a href="#"><img class="img-fluid"
                                                        src="http://university_project.test/assets/images/team5.png"
                                                        alt="" /></a>
                                                <span class="versus">VS</span>
                                                <a href="#"><img class="img-fluid"
                                                        src="http://university_project.test/assets/images/team6.png"
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
                        <div class="poins-table">
                            <table>
                                <tr>
                                    <th>Pos</th>
                                    <th>Teams</th>
                                    <th>P</th>
                                    <th>W</th>
                                    <th>D</th>
                                    <th>L</th>
                                    <th>F</th>
                                    <th>A</th>
                                    <th>GD</th>
                                    <th>Pts</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{ asset('assets/images/viper.html') }}" alt=""> Vipers Athletics
                                    </td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="{{ asset('assets/images/elite.png') }}" alt=""> Elite Runners</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="{{ asset('assets/images/kicker.png') }}" alt=""> Dynamic Kickers
                                    </td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="{{ asset('assets/images/raging.png') }}" alt=""> Raging Rapids
                                    </td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="{{ asset('assets/images/swift.png') }}" alt=""> Swift Swimmers
                                    </td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><img src="{{ asset('assets/images/sky.png') }}" alt="">Sky Highers</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>8</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-12 mt-5 mt-xl-0">
                </div>
            </div>
        </div>
    </section>
@endsection

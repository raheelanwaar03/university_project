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
                        <h2 class="sub-title mb-3">PRIMARY LEAGUE 2022</h2>
                        <p>Have you ever seen landscape images where the water looks soft, silky and smooth? Or perhaps an
                            image showing light
                            trails through a city scene? Then you’ve seen long exposure photography. It’s easy to create and
                            doesn’t need heavy
                            manipulation. In this article, we’ll show you how to do it yourself.
                        </p>
                        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                            approaches to corporate
                            strategy foster collaborative thinking to further the overall value proposition. Organically
                            grow
                            the holistic world
                            view of disruptive innovation via workplace diversity and empowerment.</p>
                        <div class="league-gallery justify-content-between my-5 row">
                            <img class="img-fluid rounded-3" src="{{ asset('assets/images/league1.jpg') }}" alt="">
                            <img class="img-fluid rounded-3" src="{{ asset('assets/images/league2.jpg') }}" alt="">
                        </div>
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

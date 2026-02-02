@extends('layout.app')

@section('content')
    <!-- Contact Section Start -->
    <section class="contact-card-sec sec-padding">
        <div class="container">
            <div class="row gy-3 gy-md-0">
                <div class="col-md-4">
                    <div class="contact-card text-center rounded-3">
                        <span class="icon rounded-pill"><i class="feather-icon icon-phone"></i></span>
                        <h3>Call Us</h3>
                        <ul class="list-unstyled">
                            <li><a href="tel:123456789">+39 - 123456789 </a></li>
                            <li><a href="tel:123456789">+39 - 123456789</a></li>
                        </ul>
                    </div>
                    <!-- Card End -->
                </div>
                <div class="col-md-4">
                    <div class="contact-card text-center rounded-3">
                        <span class="icon rounded-pill"><i class="feather-icon icon-mail"></i></span>
                        <h3>Email Us</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><span class="__cf_email__">champions1@gmail.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><span class="__cf_email__">champions2@gmail.com</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Card End -->
                </div>
                <div class="col-md-4">
                    <div class="contact-card text-center rounded-3">
                        <span class="icon rounded-pill"><i class="feather-icon icon-map-pin"></i></span>
                        <h3>Locations</h3>
                        <p>Via Antonio Fogazzaro 58.
                            Postal code: 30172
                        </p>
                    </div>
                    <!-- Card End -->
                </div>
            </div>
        </div>
    </section>
@endsection

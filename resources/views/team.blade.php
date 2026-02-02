@extends('layout.app')

@section('content')
@endsection
<section class="promo-sec position-relative jarallax"
    style="background-image: url('{{ asset('assets/images/promo-sec.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="promo-txt">
                    <h1 class="text-uppercase text-info mt-3 mb-5 text-center">Teams</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Champions</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Promo Section End -->

<!-- Team Section Start -->
<section class="team-page sec-padding">
    <div class="container">
        <div class="row g-5">
            @foreach ($teams as $team)
                <div class="col-lg-4 col-sm-6">
                    <div class="team-member text-center">
                        <div class="team-img mb-4">
                            <img class="img-fluid" src="{{ asset('assets/team.png') }}" height="200px" width="200px" alt="team">
                        </div>
                        <h3 class="text-uppercase mb-0">{{ $team->name }}</h3>
                        <p>{{ $team->created_at }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

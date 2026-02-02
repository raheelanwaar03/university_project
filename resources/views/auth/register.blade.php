@extends('layout.app')

@section('content')
    <section class="account-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center mb-5">
                        <h2 class="sec-title line primary">Register</h2>
                        <p>Please register your team to participate.</p>
                    </div>
                    <div class="account-form bg-mute rounded-4">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group half-form">
                                <input type="email" name="email" placeholder="Email*" required>
                            </div>
                            <div class="form-group half-form">
                                <input type="text" name="name" placeholder="Team Name*" required>
                            </div>
                            <div class="form-group half-form">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password*"
                                    required>
                            </div>
                            <div class="form-group half-form">
                                <input type="password" name="password" placeholder="Password*" required>
                            </div>
                            <button class="btn btn-primary w-100 mt-5">Register</button>
                        </form>
                        <div class="login-message text-center mt-5">
                            <p>Already a member? <a class="text-success" href="login.html"> Login Here </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

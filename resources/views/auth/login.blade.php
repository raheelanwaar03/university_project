@extends('layout.app')

@section('content')
    <section class="account-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center mb-5 pb-lg-5">
                        <h2 class="sec-title line primary">Login Account</h2>
                        <p>Please log to access your account.</p>
                    </div>
                    <div class="account-form bg-mute rounded-4">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="email" name="email" placeholder="email*" required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password*" required>
                            </div>
                            <div class="d-flex justify-content-between my-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="text-danger">Forget Password</a>
                            </div>
                            <button class="btn btn-primary w-100 mt-4">Login</button>
                        </form>
                        <div class="login-message text-center mt-5">
                            <p>Don’t have an account ? <a class="text-success" href="{{ route('register') }}"> Register Now </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

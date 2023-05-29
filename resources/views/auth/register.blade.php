@extends('frontend.main_master')
@section('main')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg10">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Sign Up</li>
                </ul>
                <h3>Sign Up</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Sign Up Area -->
    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color">Sign Up</span>
                                <h2>Create an Account!</h2>
                            </div>

    <form method="POST" action="{{ route('register') }}">
      @csrf

        <div class="row">
            <div class="col-lg-12 ">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your Username" placeholder="Username">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter email" placeholder="Email">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" required data-error="Please enter email" placeholder="password">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 text-center">
                <button type="submit" class="default-btn btn-bg-three border-radius-5">
                    Sign Up
                </button>
            </div>

            <div class="col-12">
                <p class="account-desc">
                    Already have an account? 
                    <a href="{{ route('login') }}">Sign In</a>
                </p>
            </div>
        </div>
    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Area End -->



@endsection
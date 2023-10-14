@extends('layout.app')

@section('title','Registration')
    
@section('content')

<section class="user_registration">
    <a class="logo" href="{{route('home.page')}}">
        <img src="{{asset('img/logo.png')}}" alt="Logo">
    </a>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
                <h3>Sign up to</h3>
                <h4>Blogify is simply</h4>
                <p>If you already have an account </p>
                <p>You can <a href="{{route('user.login')}}">Login here !</a></p>
            </div>
            <div class="col-12 col-lg-6">
                <div class="registration_form">
                    <h6>Sign Up</h6>
                    <input type="text" id="name" placeholder="Name">
                    <input type="email" id="email" placeholder="Enter email">
                    <input type="Mobile" id="mobile" placeholder="Mobile">
                    <input type="text" id="password" placeholder="Password">
                    <button>Register</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
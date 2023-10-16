@extends('layout.app')

@section('title', 'Login')

@section('content')

    {{-- Login Form --}}
    <section class="user_login">
        <a class="logo" href="{{route('home.page')}}">
            <img src="{{asset('img/logo.png')}}" alt="Logo">
        </a>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
                    <h3>Sign in to</h3>
                    <h4>Blogify is simply</h4>
                    <p>If you don’t have an account register </p>
                    <p>You can <a href="{{route('user.register')}}">Register here !</a></p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="login_form">
                        <h6>Sign in</h6>
                        <form action="/login/user" method="post">
                            @csrf
                            <input type="email" id="email" name="email" placeholder="Enter email">
                            <input type="password" id="password" name="password" placeholder="Password">
                            <button type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
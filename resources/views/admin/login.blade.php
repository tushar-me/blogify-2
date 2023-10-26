<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogify - Admin Login</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{asset('libs/bootstrap/bootstrap.min.css')}}">

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <section class="user_login">
        <a class="logo" href="{{route('home.page')}}">
            <img src="{{asset('img/logo.png')}}" alt="Logo">
        </a>
        <div class="container">
            <div class="login_form login_form-admin">
                <h6>Admin Login</h6>
                <form action="" method="post">
                    @csrf
                    <input type="email" id="email" name="email" placeholder="Enter email">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <button type="submit">Login</button>
                </form>
            </div>
            <p class="text-center mt-4">If you don’t have an account register You can <a href="{{route('admin.register')}}">Register here !</a></p>
        </div>
    </section>
</body>
</html>
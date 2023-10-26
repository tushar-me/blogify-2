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
    <section class="user_registration">
        <a class="logo" href="{{route('home.page')}}">
            <img src="{{asset('img/logo.png')}}" alt="Logo">
        </a>
        <div class="container">
            <div class="registration_form registration_form-admin">
                <h6>Admin Register</h6>
                <form action="" method="post">
                    @csrf
                    <input type="text" id="name" name="name" placeholder="Name">
                    <input type="email" id="email" name="email" placeholder="Enter email">
                    <input type="Mobile" id="mobile" name="mobile" placeholder="Mobile">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <button type="submit">Register</button>
                </form>
            </div>
            <p class="text-center mt-4">If you already have an account  You can <a href="{{route('admin.login')}}">Login here !</a></p>
        </div>
    </section>
</body>
</html>
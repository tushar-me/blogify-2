<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogify -  @yield('title')</title>

    {{-- Fav Icon --}}
    <link rel="shortcut icon" href="{{asset('img/fav-icon.png')}}" type="image/x-icon">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Work+Sans:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">


    {{-- Animate Css --}}
    <link rel="stylesheet" href="{{asset('libs/wow-js/animate.css')}}">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{asset('libs/bootstrap/bootstrap.min.css')}}">
    
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Jquery --}}
    <script src="{{asset('libs/jquery/jquery-3.5.1.min.js')}}"></script>

</head>
<body data-scroll-animation="true">

    <main>
        @yield('content')
    </main>


    {{-- WOW JS --}}
    <script src="{{asset('libs/wow-js/wow.min.js')}}"></script>

    {{-- Bootstrap JS --}}
    <script src="{{asset('libs/bootstrap/bootstrap.min.js')}}"></script>

    {{-- Custom JS --}}
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>

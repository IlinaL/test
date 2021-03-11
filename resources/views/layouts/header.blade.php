<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Solutions | @yield('title', '')</title>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Logo -->
    <!-- <link rel="shortcut icon" href="pictures/1.jpg"> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{URL::asset('/css/main.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/css/style.css')}}" rel="stylesheet" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Magnific - Popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" />

    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-item active-item" id="nav">

        <a class="nav-link it" href="/">IT Solutions</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('home')}}">Home</a>
                </li>

                <!-- Register -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('register')}}">Register</a>
                </li>

                <!-- Login -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
            </ul>

            <!-- Search -->
            <div class="container1">
                <form class="form-inline my-2 my-lg-0 form-group" action="{{URL::to('/search')}}" method="get"
                    role="search">
                    {{ csrf_field()}}
                    <input type="search" name="query" placeholder="Search" id="forms" class="form-control"
                        aria-label="Search">
                    <div class="btn">
                        <button class="my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </form>
            </div>
    </nav>
    </div>
    </form>
    @yield('content')
    @yield('style')
    @yield('script')
</body>

</html>
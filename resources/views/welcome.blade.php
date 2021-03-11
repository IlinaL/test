@extends('layouts.header')

@section('content')

<header>
    <div id="carouselExampleCaptions" class="carousel slide " style="position:relative" data-ride="carousel">
        <!-- Slider -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- Slider/Register -->
                <div class="banner1"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animated fadeInDown" style="animation-delay: 1s; animation-duration:3s">Create your
                        account</h2>
                    <p class="animated fadeInUp" style="animation-delay: 2s; animation-duration:3s"><a class=""
                            href="{{url('register')}}">Register</a></p>
                </div>
            </div> <!-- END Slider/Register -->

            <!-- Slider/Login -->
            <div class="carousel-item">
                <div class="banner2"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animated fadeInDown" style="animation-delay: 1s; animation-duration:3s">IT Solutions
                    </h2>
                    <p class="animated fadeInUp" style="animation-delay: 2s; animation-duration:3s"><a
                            href="{{url('login')}}">Login</a></p>
                </div>
            </div> <!-- END Slider/Login -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- END Slider -->
</header>
@stop
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLOG</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/bootstrap.min.css')}}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{asset('blog/css/font-awesome.min.css')}}">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="{{asset('blog/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/owl.theme.default.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('blog/css/animate.css')}}">
    <!-- Swiper Master Css -->
    <link rel="stylesheet" href="{{asset('blog/vendors/swiper-master/css/swiper.min.css')}}">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="{{asset('blog/css/magnific-popup.css')}}">
    <!-- Slicknav Master -->
    <link rel="stylesheet" href="{{asset('blog/vendors/slicknav-master/slicknav.min.css')}}">
    <!-- Site Style Css -->
    <link rel="stylesheet" href="{{asset('blog/style.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/responsive.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('blog/vendors/modernizr-js/modernizr.js')}}"></script>
</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="{{asset('blog')}}/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- ================ Start Header Section ================ -->
{{--@include('layouts.header')--}}

<div class="main" role="main">

    <!-- Start page title section -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5 class="fz-26 fw-5">Blog grid</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-center d-inline-flex">
                            <li class="breadcrumb-item"><a href="{{asset('blog')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


<!--
    <div id="app">


        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    -- Collapsed Hamburger
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    -- Branding Image --
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
  --
        -- Left Side Of Navbar

        <ul class="nav navbar-nav">
&nbsp;
                    </ul>


                    -- Right Side Of Navbar --
                    <ul class="nav navbar-nav navbar-right">
                        -- Authentication Links --
                        @if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>
@endif
        </ul>
    </div>
</div>
</nav>


</div

Scripts    -->

</div>
@yield('content')

<!-- ================ Start Footer Section ================ -->
@include('layouts.footer')

<!-- ================ Start Jquery Plugins ================ -->
<script src="/blog/js/jquery.min.js"></script>
<!-- Bootstrap Js -->
<script src="/blog/js/bootstrap.min.js"></script>
<!-- Owl Carousel Js -->
<script src="/blog/js/owl.carousel.min.js"></script>
<!-- Swiper Master Js -->
<script src="/blog/vendors/swiper-master/js/swiper.min.js"></script>
<!-- Slicknav Master -->
<script src="/blog/vendors/slicknav-master/jquery.slicknav.min.js"></script>
<!-- magnific popup -->
<script src="/blog/js/magnific-popup.min.js"></script>
<!-- counterup -->
<script src="/blog/vendors/counterup/waypoints.min.js"></script>
<script src="/blog/vendors/counterup/counterup.min.js"></script>
<!-- scroll up -->
<script src="/blog/js/scrollup.js"></script>
<!-- main js -->
<script src="/blog/js/main.js"></script>



</body>
</html>
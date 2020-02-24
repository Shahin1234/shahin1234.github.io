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
@include('user.layouts.header')

<div class="main" role="main">

    <!-- Start page title section -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5 class="fz-26 fw-5">Blog grid</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-center d-inline-flex">
                            <li class="breadcrumb-item"><a href="{{asset('blog')}}/#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    @yield('content');
<!-- Start client section -->
<div class="client-area client-area-3 client-area-style-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 offset-lg-3 col-md-2 col-12">
                <div class="section-title text-center">
                    <h4 class="fw-7">I Am Featured In</h4>
                    <p class="fz-16 fw-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/01.png" alt="" class="img-fluid"></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/02.png" alt="" class="img-fluid"></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/03.png" alt="" class="img-fluid"></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/04.png" alt="" class="img-fluid"></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/05.png" alt="" class="img-fluid"></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/06.png" alt="" class="img-fluid"></a></div>
        </div>
    </div>
</div>

</div>

<!-- ================ Start Footer Section ================ -->
@include('user.layouts.footer')

<!-- ================ Start Jquery Plugins ================ -->
<script src="{{asset('blog')}}/js/jquery.min.js"></script>
<!-- Bootstrap Js -->
<script src="{{asset('blog')}}/js/bootstrap.min.js"></script>
<!-- Owl Carousel Js -->
<script src="{{asset('blog')}}/js/owl.carousel.min.js"></script>
<!-- Swiper Master Js -->
<script src="{{asset('blog')}}/vendors/swiper-master/js/swiper.min.js"></script>
<!-- Slicknav Master -->
<script src="{{asset('blog')}}/vendors/slicknav-master/jquery.slicknav.min.js"></script>
<!-- magnific popup -->
<script src="{{asset('blog')}}/js/magnific-popup.min.js"></script>
<!-- counterup -->
<script src="{{asset('blog')}}/vendors/counterup/waypoints.min.js"></script>
<script src="{{asset('blog')}}/vendors/counterup/counterup.min.js"></script>
<!-- scroll up -->
<script src="{{asset('blog')}}/js/scrollup.js"></script>
<!-- main js -->
<script src="{{asset('blog')}}/js/main.js"></script>
</body>

</html>
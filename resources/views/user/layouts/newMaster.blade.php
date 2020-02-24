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
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.green.min.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('blog/vendors/modernizr-js/modernizr.js')}}"></script>
    @yield('stylesheet')
    <style>
        .sitemenu,.d-flex.justify-content-around>li>a,.d-flex.justify-content-around>li>a:hover,.fa.fa-user{
            background: #3dc3dc;
            color: #fff;
        }
        .logo img, .barnd-logo img{
            min-width:100% !important;
            max-height: 400px !important;
        }
        .user_border{
            border: 1px solid #fff;
            padding: 5px;
        }
    </style>
</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="{{asset('blog')}}/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- ================ Start Header Section ================ -->
@include('user.layouts.new')

@yield('content');

<!-- ================ Start Footer Section ================ -->
@include('user.layouts.footer')

<!-- ================ Start Jquery Plugins ================ -->
<script src="{{asset('blog/js/jquery.min.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('blog/js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel Js -->
<script src="{{asset('blog/js/owl.carousel.min.js')}}"></script>
<!-- Swiper Master Js -->
<script src="{{asset('blog/vendors/swiper-master/js/swiper.min.js')}}"></script>
<!-- Slicknav Master -->
<script src="{{asset('blog/vendors/slicknav-master/jquery.slicknav.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('blog/js/magnific-popup.min.js')}}"></script>
<!-- counterup -->
<script src="{{asset('blog/vendors/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('blog/vendors/counterup/counterup.min.js')}}"></script>
<!-- scroll up -->
<script src="{{asset('blog/js/scrollup.js')}}"></script>
<!-- main js -->
<script src="{{asset('blog/js/main.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Initialize Swiper -->
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        nav:true,
    });
</script>

</body>

</html>
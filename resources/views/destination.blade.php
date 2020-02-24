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
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- ================ Start Header Section ================ -->
<header class="header">
    <div class="top-header bg-1 txt-clr-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 d-sm-block d-none">
                    <div class="top-bar-article fz-16">

                        <span><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
                <div class="col-lg-5 fw-3 fz-14 top-hdr-padding d-none d-lg-block">
                    <span class="top-bar-article-text">Hardwork beats talent,when talent doesn't work hard...</span>
                </div>

                <div class="col-lg-5 col-md-9 col-sm-9 col-12 top-hdr-padding">
                    <ul class="list-inline">

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="barnd-logo text-center ptb-40">
                        <a href="{{asset('blog')}}/index.html" class="logo">
                            <img src="{{asset('blog')}}/images/talentshare.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start sitemenu -->
    <div class="sitemenu" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-6 offset-lg-2">
                    <nav class="navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul id="menubar" class="navbar-nav">
                                <li>
                                    <a href="{{asset('/home/details')}}">home</a>

                                </li>
                                <li>
                                    <a href="{{asset('blog')}}/#">Authentication</a>
                                    <ul>



                                        <li><a href="{{url('login')}}">login</a></li>
                                        <li><a href="{{url('register')}}/">register</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{asset('/contack/details')}}">contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-3 col-6 trvel-user">
                    <ul class="d-flex justify-content-end">

                        <li class="blog-src-btn">
                            <a href="{{asset('blog')}}/javascript:void(0);"><i class="fa fa-search"></i></a>
                            <ul  class="blog-secrch">
                                <li>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search your article...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">SEARCH</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="user-option">
                            <i class="fa fa-user"></i>
                            <ul>
                                <li><a href="{{asset('login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
                                <li><a href="{{asset('register')}}"><i class="fa fa-pencil-square-o"></i> Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>



<div class="main" role="main">

    <!-- ================ Start Main Section ================ -->
    <div class="main" role="main">

        <!-- Start page title section -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="fz-26 fw-5">Destination</h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-center d-inline-flex">
                                <a href="{{asset('/home/details')}}">home</a>
                                <li class="breadcrumb-item active" aria-current="page">Destination</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact area -->

        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="fz-26 fw-5"></h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-center d-inline-flex">

                                <li class="breadcrumb-item active" aria-current="page"></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- google map -->
        <div id="googleMap"></div>

    </div>

    <!-- ================ Start Footer Section ================ -->
    <footer class="footer txt-clr-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="{{asset('blog')}}/index.html" class="logo">
                        <img src="{{asset('blog')}}/images/talent2.png" alt="">
                    </a>
                    <p class="mt-45"></p>
                    <form class="subscribe-form mt-25">
                        <div class="form-group mb-0">
                            <input type="email" class="form-control email-input" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-primary subscribe-btn bg-1">subscribe</button>
                    </form>
                    <p class="fz-14 mt-30">© 2018 All Right Reserved By Gm Shahin Hossain</p>
                </div>
                <div class="col-lg-3 ftr-link">
                    <div class="ftr-title pt-15 mb-35">
                        <h3>Quick Link</h3>
                    </div>
                    <ul>
                        <li><a href="{{asset('blog')}}/#">About Me</a></li>
                        <li><a href="{{asset('blog')}}/#">Destination</a></li>
                        <li><a href="{{asset('blog')}}/#"> Story</a></li>

                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="ftr-title pt-15 mb-35">
                        <h3>Twitter Feed</h3>
                    </div>
                    <ul class="twitter-link">
                        <li class="mb-15"><span class="mr-10"><i class="fa fa-twitter"></i></span><a href="{{url('https://twitter.com/GmHoaasin?edit=true')}}"></a></li>
                        <li><span class="mr-10"><i class="fa fa-twitter"></i></span><a href="{{asset('blog')}}/#">https://twitter.com /envato/status/ 944202192013144064 https://twitter.com/envato/status/944202192013144064</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="ftr-title pt-15 mb-35">
                        <h3>Contact Information</h3>
                    </div>
                    <ul class="ftr-contact">
                        <li><span>Location:</span> Campus,BSMRSTU,Gopalganj-8100</li>
                        <li><span>Email:</span> shahin.cse.bsmrstu@gmail.com</li>
                        <li><span>Phone:</span> 01792333737</li>
                    </ul>
                    <div class="ftr-social">
                        <div class="ftr-title pt-15 mb-15">
                            <h3 class="fz-18">Social Prifile</h3>
                        </div>
                        <ul class="d-flex">
                            <li><a href="{{url('https://www.facebook.com/angel.shahin.33')}}" class="icon-fb"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{('https://twitter.com/GmHoaasin?edit=true')}}" class="icon-twit"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{asset('blog')}}/#" class="icon-glg"><i class="fa fa-google"></i></a></li>
                            <li><a href="{{('https://www.linkedin.com/in/gm-shahin-hossain-a08a76155/')}}" class="icon-ldn"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{url('https://www.youtube.com/channel/UCDh_Lv72WpNc7yzkDg6XzbA?view_as=subscriber')}}" class="icon-utb"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{asset('blog')}}/#" class="scrollup"><i class="fa fa-angle-up"></i></a>
    </footer>

    <!-- ================ Start Jquery Plugins ================ -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Carousel Js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Swiper Master Js -->
    <script src="vendors/swiper-master/js/swiper.min.js"></script>
    <!-- Slicknav Master -->
    <script src="vendors/slicknav-master/jquery.slicknav.min.js"></script>
    <!-- magnific popup -->
    <script src="js/magnific-popup.min.js"></script>
    <!-- counterup -->
    <script src="vendors/counterup/waypoints.min.js"></script>
    <script src="vendors/counterup/counterup.min.js"></script>
    <!-- scroll up -->
    <script src="js/scrollup.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
    <script>
        function initialize() {
            var e = { zoom: 15, scrollwheel: !1, center: new google.maps.LatLng(40.712764, -74.005667), styles: [{ elementType: "geometry", stylers: [{ color: "#f5f5f5" }] }, { elementType: "labels.icon", stylers: [{ visibility: "off" }] }, { elementType: "labels.text.fill", stylers: [{ color: "#616161" }] }, { elementType: "labels.text.stroke", stylers: [{ color: "#f5f5f5" }] }, { featureType: "administrative.land_parcel", elementType: "labels.text.fill", stylers: [{ color: "#bdbdbd" }] }, { featureType: "poi", elementType: "geometry", stylers: [{ color: "#eeeeee" }] }, { featureType: "poi", elementType: "labels.text.fill", stylers: [{ color: "#757575" }] }, { featureType: "poi.park", elementType: "geometry", stylers: [{ color: "#e5e5e5" }] }, { featureType: "poi.park", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] }, { featureType: "road", elementType: "geometry", stylers: [{ color: "#ffffff" }] }, { featureType: "road.arterial", elementType: "labels.text.fill", stylers: [{ color: "#757575" }] }, { featureType: "road.highway", elementType: "geometry", stylers: [{ color: "#dadada" }] }, { featureType: "road.highway", elementType: "labels.text.fill", stylers: [{ color: "#616161" }] }, { featureType: "road.local", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] }, { featureType: "transit.line", elementType: "geometry", stylers: [{ color: "#e5e5e5" }] }, { featureType: "transit.station", elementType: "geometry", stylers: [{ color: "#eeeeee" }] }, { featureType: "water", elementType: "geometry", stylers: [{ color: "#c9c9c9" }] }, { featureType: "water", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] }] },

                l = new google.maps.Map(document.getElementById("googleMap"), e);
            new google.maps.Marker({ position: l.getCenter(), animation: google.maps.Animation.BOUNCE, map: l })
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>
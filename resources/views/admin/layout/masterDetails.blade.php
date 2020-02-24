<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLOG DETAILS</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/bootstrap.min.css')}}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/font-awesome.min.css')}}">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/blog/css/owl.theme.default.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('/blog/css/animate.css')}}">
    <!-- Swiper Master Css -->
    <link rel="stylesheet" href="{{asset('/blog/vendors/swiper-master/css/swiper.min.css')}}">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="{{asset('/blog/css/magnific-popup.css')}}">
    <!-- Slicknav Master -->
    <link rel="stylesheet" href="{{asset('/blog/vendors/slicknav-master/slicknav.min.css')}}">
    <!-- Site Style Css -->
    <link rel="stylesheet" href="{{asset('/blog/style.css')}}">
    <link rel="stylesheet" href="{{asset('/blog/css/responsive.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('/blog/vendors/modernizr-js/modernizr.js')}}"></script>
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
                        Latest Article
                        <span><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
                <div class="col-lg-5 fw-3 fz-14 top-hdr-padding d-none d-lg-block">
                    <span class="top-bar-article-text"> It is a long established fact that a reader will be distracted by...</span>
                </div>
                <div class="col-lg-5 col-md-9 col-sm-9 col-12 top-hdr-padding">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <span><i class="fa fa-envelope"></i></span> {{ Auth::user()->username }}
                        </li>
                        <li class="list-inline-item">
                            <span><i class="fa fa-mobile"></i></span>
                        </li>
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
                        <a href="index.html" class="logo">
                            <img src="images/logo.png" class="img-fluid" alt="">
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
                    <h5 class="fz-26 fw-5">Blog Details</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-center d-inline-flex">
                            <li class="breadcrumb-item"><a href="{{asset('/home/details')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Start blog area -->
    <div class="blog-area bg-2">
        <div class="container">
            <div class="row wrap-reverse">
                <div class="col-lg-4">
                    <!-- Start categoris -->
                    <div class="blog-sidebar-section">
                        <div class="blog-sidebar-title">
                            <h5 class="fw-7 fz-18">Category</h5>
                        </div>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingone">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseone" aria-expanded="false" aria-controls="collapseone">Asia</button>
                                </div>
                                <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Europe</button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Africa
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfour">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        America
                                    </button>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfive">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        North America
                                    </button>
                                </div>
                                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingsix">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        West America
                                    </button>
                                </div>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start sidebar banner -->
                    <div class="sidebar-banner mt-30">
                        <ul>
                            <li><a href="#"><img src="images/add/02.jpg" alt="" class="img-fluid"></a></li>
                            <li class="mt-30"><a href="#"><img src="images/add/03.jpg" alt="" class="img-fluid"></a></li>
                        </ul>
                    </div>

                    <!-- Start tags -->
                    <div class="blog-sidebar-section mt-30">
                        <div class="blog-sidebar-title">
                            <h5 class="fw-7 fz-18">Tag</h5>
                        </div>
                        <div class="tags">
                            <a href="#">Travel</a>
                            <a href="#">Tour</a>
                            <a href="#">Country</a>
                            <a href="#">World</a>
                            <a href="#">Asia</a>
                            <a href="#">Hill</a>
                            <a href="#">Sea</a>
                            <a href="#">Forest</a>
                            <a href="#">River</a>
                            <a href="#">Tradition</a>
                            <a href="#">Enjoy</a>
                        </div>
                    </div>

                    <!-- Start instagram -->
                    <div class="blog-sidebar-section mt-30">
                        <div class="blog-sidebar-title">
                            <h5 class="fw-7 fz-18">Instragram</h5>
                        </div>
                        <div class="instagram">
                            <a href="#"><img src="images/instagram/01.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="images/instagram/02.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="images/instagram/03.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="images/instagram/04.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="images/instagram/05.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="images/instagram/06.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="images/instagram/07.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="images/instagram/08.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="images/instagram/09.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Start article section -->
@yield('content');
                    <!-- start comment area -->
                    <h1>Comment List</h1>
                    @if(!empty($commentList))
                        @foreach($commentList as $comnet)
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comment-area">
                                        <img src="Desktop\avatar.png" alt="" class="">
                                        <a class="name" href="#" ><b>{{$comnet->username}}</b> </a>
                                        <img  src="{{asset('uploads/personalPhotos/'.$comnet->uphoto)}}"  style="width: 25px; height: 21px />  

                                        <h3>{{$comnet->comment}}</h3>


                                    </div>
                                </div>
                            </div>
                    @endforeach
                @endif
                <!-- start comment area -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="comment-area">
                                <h5>Leave A Comment</h5>
                                @guest
                                    <p>For a Comment,You need to login first<a href="{{route('login')}}>Login </a> </p>">

                                @else
                                    <form method="post" action="{{url('blog.comment.save',$blgas->id)}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <textarea class="form-control" placeholder="Your Massage" name="comment" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-30">
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-primary comment-submit-btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start client section -->
    <div class="client-area client-area-style client-area-style-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title text-center">
                        <h4 class="fw-7">I Am Featured In Different Place</h4>
                        <p class="fz-16 fw-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/01.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/02.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/03.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/04.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/05.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/06.png" alt="" class="img-fluid"></a></div>
            </div>
        </div>
    </div>

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
                <p class="fz-14 mt-30">© 2020 All Right Reserved By Gm Shahin Hossain</p>
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
<!-- main js -->
<script src="js/main.js"></script>
</body>

</html>
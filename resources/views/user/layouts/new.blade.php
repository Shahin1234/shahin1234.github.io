<header class="header">
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
                                    Hardwork beats talent,when talent doesn't work hard...
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-3 col-6 trvel-user">
                    <ul class="d-flex justify-content-around">
                        <li>
                            <a href="{{route('home')}}">home</a>

                        </li>

                        @auth
                            <li><a href="{{route('chat')}}">chat</a></li>
                        @endauth

                        @guest
                            <li class="user-option">
                                <i class="fa fa-user"></i>
                                <ul>
                                    <li><a href="{{asset('login')}}"><i class="fa fa-sign-in" style="margin-left: -30px"></i> Login</a></li>
                                    <li><a href="{{asset('register')}}"><i class="fa fa-pencil-square-o"></i> Register</a></li>
                                </ul>
                            </li>
                        @endguest

                        <li class="blog-src-btn">
                            <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
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


                    </ul>
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            {{Session::get('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{Session::get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="barnd-logo text-center">
                        <div class="owl-carousel owl-theme">
                            <div class="item"><img src="{{asset('image/1.jpeg')}}"></div>
                            <div class="item"><img src="{{asset('image/2.jpeg')}}"></div>
                            <div class="item"><img src="{{asset('image/3.jpg')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
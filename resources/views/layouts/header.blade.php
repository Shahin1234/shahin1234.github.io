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

                        <li class="list-inline-item">
                            <span>  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
{{ Auth::user()->name }} <span class="caret"></span>
                                </a>
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

                                <li><a href="{{asset('contactDetails')}}">contact</a></li>
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
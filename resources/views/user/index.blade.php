@extends('user.layouts.master')
@section('content')

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
                            <li class=php"breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if(isset($blogs[0]))
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-article p-0 wrap-reverse">
                        <div class="article-post-img">
                            <h3><a  href="{{route('userInfo',$blog->id)}}">{{$blog->name}}</a></h3>

                            <img  src="{{asset('uploads/personalPhotos/'.$blog->uphoto)}}" style="width: 25px; height: 21px;" />
                        </div>
                        <div class="article-post-img">
                            <img  src="{{asset('admin/uploads/'.$blog->bphoto)}}"  height="300" width="300"  alt="">
                        </div>
                        <div class="article-post text-left mt-35">
                            <h3><a  href="#">{{$blog->title}}</a></h3>
                            <p> {{str_limit($blog->description,20,'.......')}} </p>
                            <a href="{{url('welcome2').'?id='.$blog->id}}" class="txt-clr-1 read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="d-flex justify-content-center">
        {{$blogs->links()}}
    </div>

    {{--<!-- Start client section -->--}}
    {{--<div class="client-area client-area-3 client-area-style-2">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-6 col-md-8 offset-lg-3 col-md-2 col-12">--}}
                    {{--<div class="section-title text-center">--}}
                        {{--<h4 class="fw-7">I Am Featured In</h4>--}}
                        {{--<p class="fz-16 fw-4">It is a long established fact that a reader will be distracted by the readable content o a page when looking at its layout. </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/01.png" alt="" class="img-fluid"></a></div>--}}
                {{--<div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/02.png" alt="" class="img-fluid"></a></div>--}}
                {{--<div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/03.png" alt="" class="img-fluid"></a></div>--}}
                {{--<div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/04.png" alt="" class="img-fluid"></a></div>--}}
                {{--<div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/05.png" alt="" class="img-fluid"></a></div>--}}
                {{--<div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="{{asset('blog')}}/#"><img src="{{asset('blog')}}/images/client/06.png" alt="" class="img-fluid"></a></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

</div>

@endsection

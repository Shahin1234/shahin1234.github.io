@extends('user.layouts.newMaster')
@section('stylesheet')
    <style>
        .bottom-header{
            display: none;
        }
        .contact-area{
            padding: 50px 0;
        }
    </style>
{{--@endsection--}}
@yield('content')

    <!-- contact area -->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 offset-lg-1">
                                <h4>Send Us your Feedback</h4>
                                <form>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control contact-form-input" placeholder="Name">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="email" class="form-control contact-form-input" placeholder="Email">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="massage" rows="7" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary btn-block contatc-btn">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 contact-info">
                    <div class="contact-address">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="contact-marker">1234 Y boltton St, Las Vegas, FL, 75432</li>
                            <li class="contact-mail">contact@talentshare.com</li>
                            <li class="contact-number">+00 1792333737</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


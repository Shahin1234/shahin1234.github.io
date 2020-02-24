@extends('auth.master')

@section('content')
    <div class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-12">
                    <div class="register">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2 col-12">
                                <div class="section-title text-center">
                                    <h4 class="fw-7">{{ __('Reset Password') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                                <form  method="POST" action="{{ route('login') }}">

                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Your Email.."  required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Your Password.." required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password_confirmed') ? ' has-error' : '' }}">
                                        <label for="password">{{ __('Confirm Password') }}</label>
                                        <input id="password_confirmed" type="password" class="form-control{{ $errors->has('password_confirmed') ? ' is-invalid' : '' }}" name="password_confirmed" placeholder="Confirmed Password.." required>
                                        @if ($errors->has('password_confirmed'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmed') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block reg-btn">{{ __('Reset Password') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

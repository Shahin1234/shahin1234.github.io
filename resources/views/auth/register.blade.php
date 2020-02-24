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
                                    <h4 class="fw-7">Create Your Accounts</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                                @if(Session::has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{Session::get('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @elseif(Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{Session::get('success')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif


                                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                                        {{ csrf_field() }}


                                        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                                            <label for="username" class="col-md-4 control-label">Student Id</label>

                                            <div class="col-md-6">
                                                <input id="student_id" type="text" class="form-control" name="student_id" value="{{ old('student_id') }}" required autofocus>

                                                @if ($errors->has('student_id'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <label for="username" class="col-md-4 control-label">Username</label>

                                            <div class="col-md-6">
                                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                                @if ($errors->has('username'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>


                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Name</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                                            <label for="username" class="col-md-4 control-label">Department</label>

                                            <div class="col-md-6">
                                                <input id="department" type="text" class="form-control" name="department" value="{{ old('department') }}" required autofocus>

                                                @if ($errors->has('department'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('ses') ? ' has-error' : '' }}">
                                            <label for="username" class="col-md-4 control-label">Session</label>

                                            <div class="col-md-6">
                                                <input id="ses" type="text" class="form-control" name="ses" value="{{ old('ses') }}" required autofocus>

                                                @if ($errors->has('ses'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('ses') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('iname') ? ' has-error' : '' }}">
                                            <label for="iname" class="col-md-4 control-label">Institution Name</label>

                                            <div class="col-md-6">
                                                <input id="yearSem" type="text" class="form-control" name="iname" value="{{ old('iname') }}" required autofocus>

                                                @if ($errors->has('iname'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('iname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                            <label for="fname" class="col-md-4 control-label">Father Name</label>

                                            <div class="col-md-6">
                                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                                @if ($errors->has('fname'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('mname') ? ' has-error' : '' }}">
                                            <label for="mname" class="col-md-4 control-label">Mother Name</label>

                                            <div class="col-md-6">
                                                <input id="mname" type="text" class="form-control" name="mname" value="{{ old('mname') }}" required autofocus>

                                                @if ($errors->has('mname'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                            <label for="address" class="col-md-4 control-label">Address</label>

                                            <div class="col-md-6">
                                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                                @if ($errors->has('address'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                                            <label for="birth_date" class="col-md-4 control-label">Birth Date</label>

                                            <div class="col-md-6">
                                                <input id="birth_date" data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="birth_date" value="{{ old('birth_date') }}" required autofocus>

                                                @if ($errors->has('birth_date'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('cnumber') ? ' has-error' : '' }}">
                                            <label for="cnumber" class="col-md-4 control-label">Contact Number</label>

                                            <div class="col-md-6">
                                                <input id="cnumber" type="text" class="form-control" name="cnumber" value="{{ old('cnumber') }}" required autofocus>

                                                @if ($errors->has('cnumber'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('cnumber') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('guarcontact') ? ' has-error' : '' }}">
                                            <label for="guarcontact" class="col-md-4 control-label">Guardian Contact Number</label>

                                            <div class="col-md-6">
                                                <input id="guarcontact" type="text" class="form-control" name="guarcontact" value="{{ old('guarcontact') }}" required autofocus>

                                                @if ($errors->has('guarcontact'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('guarcontact') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                                            <label for="blood_group" class="col-md-4 control-label">Blood Group</label>

                                            <div class="col-md-6">
                                                <input id="blood_group" type="text" class="form-control" name="blood_group" value="{{ old('blood_group') }}" required autofocus>

                                                @if ($errors->has('blood_group'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                            <label for="photo" class="col-md-4 control-label">Photo</label>

                                            <div class="col-md-6">
                                                <input id="photo" type="file"  class="form-control" name="photo" value="{{ old('photo') }}" required autofocus>

                                                @if ($errors->has('photo'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btN btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>

@endsection
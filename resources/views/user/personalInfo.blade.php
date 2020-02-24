
@extends('user.layouts.newMaster')



@section('content')

    {{--<!-- BEGIN PAGE BAR -->--}}
    {{--<div class="page-bar">--}}
        {{--<ul class="page-breadcrumb">--}}
            {{--<li>--}}
                {{--<a href="{{ URL::to('adminUser') }}">Dashboard</a>--}}
                {{--<i class="fa fa-circle"></i>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">Profile</a>--}}
                {{--<i class="fa fa-circle"></i>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    {{--<!-- END PAGE BAR -->--}}
    {{--<!-- BEGIN PAGE TITLE-->--}}




    @if(isset($particularPro))
        <div style="margin-top: 5%"  class="panel-body">

            <div class="userProfile" style="flex: 0 0 66.666667%; min-height: 170px; width: 70%;  ">
                <div style="margin-left: 25%;" class="card">

                    <div class="card-header card-header-primary">
                        <h4 style="text-align: center;" class="card-title">{{$particularPro->username}}'s Profile</h4>
                    </div>
                    <div style="margin-top: 16px;" class="card-body">



                        <div style="margin-left: 9%;"  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Student Id</label>
                                    <h2  style=" font-weight: 600;margin-left: 5%;margin-top: 1px; font-size: 170%;" >{{$particularPro->student_id}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Email</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->email}}</h2>
                                </div>
                            </div>

                        </div>

                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Name</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->name}}</h2>
                                </div>
                            </div>

                        </div>

                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Department</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->department}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Session</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->ses}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Institution Name</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->iname}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Father Name</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->fname}}</h2>
                                </div>
                            </div>

                        </div>


                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Mother Name</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->mname}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Address</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->address}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Birth Date</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->birth_date}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Contact Number</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->cnumber}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Guardian Contact Number</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->guarcontact}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Blood Group</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" >{{$particularPro->blood_group}}</h2>
                                </div>
                            </div>

                        </div>
                        <div  style="margin-left: 12%;"  class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="    font-weight: 600;font-size: 14px; " class="bmd-label-floating">Photo</label>
                                    <h2  style="margin-left: 5%;margin-top: 1px; font-size: 170%;font-weight: 600;" ><img style="width: 100px" class="img" src="{{asset('/uploads/personalPhotos/'.$particularPro->photo)}}" /></h2>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>




    @endif


    @endsection







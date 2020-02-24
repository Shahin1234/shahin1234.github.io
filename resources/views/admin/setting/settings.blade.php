@extends('admin.layout.master')
@section('content');
 <br>
 {{Session:: get('message')}}


    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">

                    {!! Form::open(['url' => '/setting/save','method'=>'post','role'=>'form']) !!}
                    <div class="form-group">
                        <label>Enter email</label>
                        <input class="form-control" name="email" placeholder="Email">

                    </div>
                    <div class="form-group">
                        <label>Enter phone number</label>
                        <input class="form-control"name="phoneNumber" placeholder="Contack Number">
                    </div>
                    <div class="form-group">
                        <input type="Submit" value="submit" class="btn btn-block btn-primary">
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
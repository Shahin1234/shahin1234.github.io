@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">



        <!-- Icon Cards-->
        <div class="row">
            <div class="col-12">
                <a class="btn btn-default text-right" href="{{url('blog/add')}}">Add blog</a>
            </div>

            <div class="col-12 table-responsive">
                {!! Form::open(['url' => 'blog/save','files'=>true]) !!}
                @if(!empty($blog))
                    <input type="hidden" name="id" value="{{$blog->id}}">
                @endif


                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" name="title" value="@if(!empty($blog)) {{$blog->title}} @endif " class="form-control" placeholder="title" required="required" autofocus="autofocus">
                        <label>Title</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="file" name="photo" class="form-control"   autofocus="autofocus">
                        <label>Image</label>
                        @if(!empty($blog))
                        <img width="80" src="{{asset('admin/uploads/'.$blog->photo )}}" alt="">
                            @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text"  value="@if(!empty($blog)) {{$blog->description}} @endif "  name="description" class="form-control" placeholder="description" required="required">
                        <label>Description</label>
                    </div>
                </div>

                @if(\Illuminate\Support\Facades\Auth::user()&&\Illuminate\Support\Facades\Auth::user()->userType==1)
                <div class="form-group">
                    <div class="form-label-group">

                        <select  name="status" class="form-control">
                            @if(!empty($blog))
                                <option @if($blog->status == 1) selected @endif value = 1> Published</option>
                                <option  @if($blog->status == 0) selected @endif  value = 0> Unpublished</option>
                            @else
                                <option value = 1> Published</option>
                                <option value = 0> Unpublished</option>
                            @endif


                        </select>

                    </div>
                </div>
                @endif

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="Submit" value="Submit" class="btn btn-primary btn-block">

                    </div>
                </div>
                {!! Form::close() !!}
            </div>

        </div>



    </div>

@endsection
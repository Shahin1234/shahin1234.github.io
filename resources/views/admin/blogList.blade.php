@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">


        <!-- Icon Cards-->
        <div class="row">

        </div>
        <div class="col-12">
            <a class=" btn btn-default text-right" href="{{url('blog/add')}}">Add Content</a></div>
        </div>


        <div class="col-12 table-responsive">
            <table class="table table-condensed">
                <tr>
                    <td>ID</td>
                    <td>PHOTO</td>
                    <td>TITLE</td>
                    <td>DESCRIPTION</td>
                    @if(\Illuminate\Support\Facades\Auth::user()&&\Illuminate\Support\Facades\Auth::user()->userType==1)
                    <td>STATUS</td>
                    @endif
                        <td>ACTION</td>


                </tr>
                @if(isset($blogs[0]))
                    @foreach($blogs as $blog)

                <tr>
                    <td>{{$blog->id}}</td>
                    <td><img width = "80" src="{{asset('admin/uploads/'.$blog->photo )}}"> </td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->description}}</td>
                    @if(\Illuminate\Support\Facades\Auth::user()&&\Illuminate\Support\Facades\Auth::user()->userType==1)
                    <td>
                        @php
                          if($blog->status==1)
                          echo 'publish';
                           else
                           echo 'unpublished';
                        @endphp
                    </td>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()&&\Illuminate\Support\Facades\Auth::user()->userType==1 ||\Illuminate\Support\Facades\Auth::id()==$blog->userId)
                        <td>
                            <a href="{{url('blog/edit').'?id='.$blog->id}}">EDIt <a/>
                                <a href="{{url('blog/delete').'?id='.$blog->id}}">DELETE <a/>
                        </td>
                    @endif

                </tr>
                    @endforeach
                    @endif

            </table>
            {{$blogs->links()}}

        </div>



    </div>

    @endsection
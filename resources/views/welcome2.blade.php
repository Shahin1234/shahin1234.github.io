@extends('admin.layout.masterDetails')

@section('content')



<div class="article">
    @if(!empty($blgas))
        <img src="{{asset('admin/uploads/'.$blgas->bphoto)}}" alt="" class="img-fluid">
        <ul class="article-user-info">
            <li class="list-inline-item"><a href="#"><i class="fa fa-user"></i> {{$blgas->name}} </a></li>
            {{--<li class="list-inline-item ml-10"><a href="#"><i class="fa fa-comment"></i>Comment({{$blog->comments()->count()}}) </a></li>--}}
            <li class="list-inline-item pull-right">
            <?php
//            $countDownAns= \Illuminate\Support\Facades\DB::table('answer_up_down_models')
              $countDownAns=\Illuminate\Support\Facades\DB::table('answer_up_down_models')
                ->where('answer_up_down_models.ques_id','=',$blgas->id)
                ->sum('adown');


            ?>
            <?php

            $count= \Illuminate\Support\Facades\DB::table('answer_up_down_models')
                ->where('answer_up_down_models.ques_id','=',$blgas->id)
                ->where('answer_up_down_models.auserId','=',\Illuminate\Support\Facades\Auth::id())
                ->select('aup','adown')
                ->first();
            //print_r($count) ;
//            $count=json_decode(json_encode($count), true);
                $count=json_decode(json_encode($count),true);

            //if ($count['aup']==1)


            ?>
            <div class="down clear">
                <?php  echo $countDownAns;?><a href="{{route('upAnsSave',['id'=> $blgas->id,'bool'=>0])}}">
                    @if($count['adown']==1)<img src="{{asset('/image/upper1.png')}}"style="width: 25px; height: 21px;" /> @else <img src="{{asset('/image/upper2.png')}}" style="width: 25px; height: 21px;" /> @endif
                </a>

                {{--                                            0<a href="{{url('').'?id='}}"><img src="{{asset('/phq/uploads/logo/downvote.png')}}"  /> </a>--}}

            </div>
            <?php
            $countUpAns= \Illuminate\Support\Facades\DB::table('answer_up_down_models')
                ->where('answer_up_down_models.ques_id','=',$blgas->id)
                ->sum('aup');

            //                                        $count= \Illuminate\Support\Facades\DB::table('answer_up_down_models')
            //                                            ->where('answer_up_down_models.ques_id','=',$answer->id)
            //                                            ->where('answer_up_down_models.auserId','=',\Illuminate\Support\Facades\Auth::id())
            //                                            ->select('aup','adown')
            //                                            ->first();
            //                                        //print_r($count) ;
            //                                        $count=json_decode(json_encode($count), true);
            //
            //                                            //if ($count['aup']==1)


            ?>
            <div class="up clear">
                {{--{{route('upAnsSave', $answer->id)}}{{url('upAnsSave').'?id='.$answer->id}}--}}
                <?php  echo $countUpAns;?><a href="{{route('upAnsSave',['id'=> $blgas->id,'bool'=>1])}}">
                    @if($count['aup']==1)<img src="{{asset('/image/down1.png')}}" style="width: 25px; height: 21px;"  /> @else <img src="{{asset('/image/down2.png')}}" style="width: 25px; height: 21px;"  /> @endif
                </a>
            </div>


</div>
</li>
</ul>


        <h3><a href="#">{{$blgas->title}}</a></h3>

        <p>{{$blgas->description}}</p>




    @endif
</div>
@endsection
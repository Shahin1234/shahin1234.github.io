
@extends('user.layouts.master')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chat</title>
    <link rel="stylesheet" href="{{asset('blog/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/blog/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/chat.css')}}">
    <style>
        .online{
            position: relative;
            height: 15px;
            width:15px;
            float: left;
            right: 25px;
            background-color: #4cd137;
            border-radius: 50%;
            border:1.5px solid white;
        }
        .offline{
            position: relative;
            height: 15px;
            width:15px;
            float: left;
            right: 25px;
            background-color: #d13a3c;
            border-radius: 50%;
            border:1.5px solid white;
        }
        .chat_date{
            float: right;
        }
        .chat_list{
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    {{--<h3 class=" text-center">Messaging</h3>--}}
    <div class="messaging">
        <div class="inbox_msg">
            <div class="inbox_people">
                <div class="headind_srch">
                    <div class="recent_heading">
                        <h4>Recent</h4>
                    </div>
                    <div class="srch_bar">
                        <div class="stylish-input-group">
                            <form method="post"  action="{{url('messSL')}}"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="text" name="searchMP" class="search-bar"  placeholder="Search" >
                                {{--                                <span class="input-group-addon">--}}
                                <button  type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            </form>

                            {{--                </span> --}}
                        </div>
                    </div>
                </div>
                {{--<a href="http://example.com">--}}
                <div class="inbox_chat">
                    @if(isset($online[0]))
                        @foreach($online as $online_user)
                            {{--@if(\Illuminate\Support\Facades\Auth::id()&&\Illuminate\Support\Facades\Auth::id()!=$online_user->id)--}}
                            <div class="chat_list active_chat" data-id="{{$online_user->id}}">
                                <div class="chat_people">
                                    <div class="chat_img"> <img width = "80" src="{{asset('uploads/personalPhotos/'.$online_user->photo )}}">  </div>
                                    <div class="chat_ib">
                                        <h5><a href="{{url('chat').'?id='.$online_user->id}}"> <span class="online"></span>{{$online_user->username}} <span class="chat_date">Active Now</span></a></h5>

                                    </div>
                                </div>
                            </div>
                    {{--@endif--}}
                        @endforeach
                    @endif
                {{--</a>--}}
                    @if(isset($users[0]))
                        @foreach($users as $user)
                                @if(\Illuminate\Support\Facades\Auth::id()&&\Illuminate\Support\Facades\Auth::id()!=$user->id)

                            <div class="chat_list active_chat"  data-id="{{$user->id}} "> <a href="{{url('chat').'?id='.$user->id}}">
                                <div class="chat_people">
                                    <div class="chat_img"> <img width = "80" src="{{asset('uploads/personalPhotos/'.$user->photo )}}"> </div>
                                    <div class="chat_ib">
                                        <h5><a href="{{url('chat').'?id='.$user->id}}"><span class="offline"></span>{{$user->username}} </a><span class="chat_date">{{\Carbon\Carbon::parse($user->updated_at)->diffForHumans()}}</span></h5>
                                        <p>Test, which is a new approach to have all solutions
                                            astrology under one roof.</p>
                                    </div>

                                </div>
                                </a>
                            </div>
                                @endif
                        @endforeach
                    @endif

                </div>
            </div>

            <div class="mesgs">
                @if(!empty($messageShow))
                <div class="msg_history">


                        @foreach($messageShow as $meSh)
                        @if($meSh->tuser_id==\Illuminate\Support\Facades\Auth::id()&&$meSh->fuser_id==$messageId)
                        {{--@if($meSh->fuser_id==\Illuminate\Support\Facades\Auth::id())--}}

                    <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p>{{$meSh->message}}</p>
                                <span class="time_date"> {{$meSh->updated_at}}</span></div>
                        </div>
                    </div>
                        @endif

                                    @if($meSh->fuser_id==\Illuminate\Support\Facades\Auth::id()&&$meSh->tuser_id==$messageId)
                                {{--@if!empty($messageId)&&($meSh->tuser_id==$messageId))--}}
                    <div class="outgoing_msg">
                        <div class="sent_msg">
                            <p>{{$meSh->message}}</p>
                            <span class="time_date"> {{$meSh->updated_at}}</span> </div>
                    </div>
                        @endif
                        @endforeach


                </div>
                @endif
                <div class="type_msg">
                    <div class="input_msg_write">

                        {{--{{route('mSave',$messageId)}}--}}

                        <form method="post"  action="{{url('mSave',$messageId)}}"  enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <input type="text" class="write_msg" name="message" placeholder="Type a message" />
                        <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </form>

                    </div>


                </div>
            </div>
        </div>

    </div></div>

<script src="{{asset('blog/js/jquery.min.js')}}"></script>
<script src="{{asset('blog/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.chat_list').on('click', function () {
            var user_id = $(this).data('id');
            // alert(user_id);
        })
    });
</script>
</body>
</html>
@endsection
<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function chat(Request $request){

//        dd($request->all());

        $data['messageId']=$request->id;
        //dd($data);

        $user_id = '';
        if(Cache::has('users')) {
             $user_id = Cache::get('users');
         }
        //dd($user_id);
        $user_id = explode(',',$user_id);
        $data['online'] = User::WhereIn('id',$user_id)->get();
        $online_users = [];
        foreach ($data['online'] as $key => $online){
            $online_users[] = $data['online'][$key]->id;
        }
        if(isset($online_users[0])){
            $data['users'] = User::WhereNotIn('id',$online_users)->get();
        }else{
            $data['users'] = User::get();
        }
//dd($online_users);

//dd($online_users);
//dd($request->id);

//        $data['messageShow']=Message::all()
//        ->where('messages.tuser_id','=',$request->id);
//        dd($data);


//        $data['messageShow']=DB::table('messages')
//            ->where('messages.fuser_id','=',Auth::id())
//            ->where('messages.tuser_id','=',$request->id)
//            ->orWhere('messages.fuser_id','=',$request->id)
//            ->orWhere('messages.tuser_id','=',Auth::id())
//
//
//            ->get();

        $data['messageShow'] = DB::table('messages')->where([
            ['messages.fuser_id', '=', Auth::id()],
            ['messages.tuser_id', '=', $request->id],
        ])
            ->orWhere([
                ['messages.fuser_id', '=', $request->id],
                ['messages.tuser_id', '=', Auth::id()],
            ])
            ->get();
       //dd($data);

//        dd($data['messageShow']);
//        dd($data);



        return view('user.chat',$data);
    }

    public function save(){
        return view('direct.blade');
    }









    public function messageSaved(Request $request, $messageId)
    {
        $data = new Message();


        $data->fuser_id = Auth::id();
        $data->tuser_id = $messageId;
        $data->message = $request->message;

        $data->save();

//        return redirect('chat');
        return redirect()->back();

    }


    public function messSelectListSearch(Request $request)
    {
        //dd($request->all());

        $data['messageId']=$request->id;
        //dd($data);

        $user_id = '';
        if(Auth::user()) {
            $user_id = Cache::get('users');
        }
        //dd($request->all());
        $search = $request->searchMP;
        // $date = $request->input('date');
         //dd($search);
        if (empty($search))
            $data['users']=null;

//        if(Cache::has('users')) {
//            $user_id = Cache::get('users');
//        }
        //$user_id=User::all();
        //dd($user_id);
        $user_id = explode(',',$user_id);
        //dd($user_id);
        $data['online'] = User::WhereIn('id',$user_id)->get();

        $online_users = [];
        foreach ($data['online'] as $key => $online){
            $online_users[] = $data['online'][$key]->id;
        }
        //dd($data);
        if(isset($online_users[0])){
            $data['users'] = User::WhereNotIn('id',$online_users)->get();
        }else{
            $data['users'] = DB::table('users')
                ->orderBy('users.id','DESC')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orwhere('users.updated_at', 'like binary', '%' . $search . '%')
                ->get();
            //User::get();
        }

        //dd($data);

        if (isset($search) && !empty($search)) {
            $data['users'] = DB::table('users')
                ->orderBy('users.id','DESC')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orwhere('users.updated_at', 'like binary', '%' . $search . '%')
                ->get();
        }
        $data['messageShow'] = DB::table('messages')->where([
            ['messages.fuser_id', '=', Auth::id()],
            ['messages.tuser_id', '=', $request->id],
        ])
            ->orWhere([
                ['messages.fuser_id', '=', $request->id],
                ['messages.tuser_id', '=', Auth::id()],
            ])
            ->get();

       //dd($data);

        return view('user.chat',$data);
    }
}


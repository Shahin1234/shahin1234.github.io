<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome(){

        //dd('ddd');

        $data['blogs']=Blog::where('status','=',1)
            ->leftJoin('users','users.id','blogs.userId')
            ->select('*','users.photo as uphoto','blogs.photo as bphoto' ,'blogs.id as id')
            ->paginate(4);
//        $data1['settingForWel'] = Setting::get()->take(1);
        if(Auth::check()){
            $data['user'] =User::find(Auth::user()->id);
        }
        //dd($data);
        return view('user.index',$data);
    }
    public function welcome2(Request $request){
        //dd($request->all());
//        $blog=Blog::where('id','=',$request->id)
//            ->leftJoin('users','users.id','blogs.userId')
//            ->select('*','users.photo as uphoto','blogs.photo as bphoto' ,'blogs.id as id')
//            ->get();


//        $blog=Blog::find($request->id);


        $data['blgas']= DB::table('blogs')
            ->leftJoin('users','users.id','blogs.userId')
            ->where('blogs.id','=',$request->id)
            ->select('*','users.photo as uphoto','blogs.photo as bphoto' ,'blogs.id as id')
            ->first();


        //dd($data);
        //dd($blog);

        $data['commentList'] = DB::table('comments')
            ->leftJoin('users','users.id','comments.user_id')
            ->where('comments.blog_id','=',$request->id)
            ->select('*','users.photo as uphoto')
            ->get();



//        $data['commentList'] = Comment::find($request->id);
//        $commentList = $blog->comments;
//        $commentList =  $data['blog']->comments;
        //dd($data);
        return view('welcome2',$data);
//        return view('welcome2',compact("blog","commentList"));
    }
    public function detailsContact(){
       // dd('ddd');

        return view('user.uContact');
    }
    public  function about(){
        return view('about');
    }
    public function destination(){
        return view('destination');
    }

    public function displayPersonalInfoDetails(Request $request ,$pid){
//        dd($pid);
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }
        // dd($pid);
        $userId=Auth::user()->id;

        $data1['particularPro']= DB::table('blogs')
            ->leftJoin('users','users.id','blogs.userId')
            ->where('blogs.id','=',$pid)
            ->first();
        //dd($data1);
        return view('user.personalInfo',$data1);
    }




}

<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentController extends Controller
{


    public function commentShow(){

        $commenttList=DB::table('comments')
            ->get();

        // Toaster::success('comment successfully publish','success');
        return redirect()->back();

    }



    public function store(Request $request, Blog $blog)
    {
        //dd($request->all());
        $this->validate($request,['comment'=>'required']);
        try{
            $cmt = $blog->comments()->create([
                "user_id" => Auth::user()->id,
                "comment" => $request->comment,
            ]);

        }catch (Exception $ex){
            $cmt = null;
        }

        return redirect()->back();

    }
}

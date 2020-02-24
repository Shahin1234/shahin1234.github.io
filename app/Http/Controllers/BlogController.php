<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function blogList(){

        //$data['blogs'] = Blog::all();
        $data=DB::table('blogs')
            ->paginate(5);
        //dd($data);
        return view('admin.blogList',['blogs'=>$data]);
    }

    public function blogAdd(){
        return view('admin.blogAddEdit');
    }

    public function blogEdit(Request $request){
        $data['blog']=Blog::find($request->id);
        return view('admin.blogAddEdit',$data);
    }



    public function blogSave(Request $request){
        //dd($request->all());

        $data = new Blog();
        if(isset($request->id) && !empty($request->id)){
            $data = Blog::find($request->id);
//            dd($data['userId']);
//            $data->userId = $data->userId;

        }

       // dd($data);
        if (empty($request->id)){
            $data->userId = Auth::id();
        }

        $data->title = $request->title;

        if(!empty($request->file('photo'))){
            $data->photo  = $this->uploadimage($request->file('photo'),'admin/uploads/','','','');

        }


        $data->description = $request->description;

      if(Auth::user()->userType==1){

          $data->status = $request->status;

      }else{
          if(isset($request->id) && !empty($request->id))
          {
              $data->status = $data->status;
              if (Auth::user()->userType==1){
                  $data->status = $request->status;
              }
          }

          else
              $data->status = 0;
      }

        //dd($data);
        $data->save();
        return redirect('blogs')->with('message','yes');
    }

    //  image upload function


    function uploadimage($img, $path, $user_file_name = null, $width = null, $height = null)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists($path . $user_file_name)) {
            unlink($path . $user_file_name);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists(path_image_thumb() . $user_file_name)) {
            unlink(path_image_thumb() . $user_file_name);
        }

// saving image in target path
        $imgName = uniqid() . '.' . $img->getClientOriginalExtension();
        $imgPath = public_path($path . $imgName);


        $img_main = \Intervention\Image\Facades\Image::make($img);
        $img_main->orientate();
        $img_main->save($path.$imgName);


        if ( file_exists($path.$imgName)) {

            return $imgName;
        }
        return false;
    }


    public function blogDelete(Request $request){
        Blog::find($request->id)->delete();
        return redirect()->back();
    }

    public function setting10(){
        return view('admin.setting');
    }
    public function home(){
        return redirect('/');
    }


}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

  public function index(){
      return view('admin.index');
  }

  // admin post sign for auth
    public function postSignup(Request $request){

$data['username'] = $request->username;
$data['email'] = $request->email;
$data['password'] = Hash::make($request->password);

User::create($data);

return redirect()->back();

    }

    //admin post login

    public function postLogin(Request $request){



        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // The user is active, not suspended, and exists.

        }else{

        }


    }
}

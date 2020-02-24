<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function registerPost(Request $request){

        $rules = [
            'username' => 'required|min:3|max:50',
            'email' => 'unique:users,email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ];
        $validate = Validator::make($request->all(),$rules);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }else{
            $data = [
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'type' => 2
            ];

            User::create($data);
//            dd(User::create($data));
            return redirect()->route('login')->with(['success' => 'Registration Successfull!!']);
        }
    }
    public function login(){
        return view('auth.login');
    }
    public function loginPost(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validate = Validator::make($request->all(),$rules);
        if ($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }else{
            $user = DB::table('users')->where('email',$request->email)->first();
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];
            if($user){
                if(Auth::attempt($credentials)){
                    if(Cache::has('user')) {
                        $user_cookie = Cache::get('user').','.$user->id;
                    }else{
                        $user_cookie = $user->id;
                    }
                    Cache::put('user', $user_cookie, now()->addMinutes(50));
                    User::where('id',$user->id)->update(['updated_at' => now()]);

                    if($user->type == 2){
                        return redirect()->route('home')->with(['success' => 'Successfully Logged in']);
                    }
                    if($user->type == 1){
                        return redirect()->route('home')->with(['success' => 'Successfully Logged in']);
                    }
                }
                return redirect()->back()->with(['error' => 'Username or password not matched']);
            }
            return redirect()->back()->with(['error' => 'User not found!']);
        }
    }
    public function resetPassword(){
        return view('auth.reset-password');
    }
    public function logout(){
        Cache::forget('user');
        Auth::logout();
        return redirect()->route('home')->with(['success' => 'Successfully Logged out']);
    }
}

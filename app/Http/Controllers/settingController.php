<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;

class settingController extends Controller
{
   public function indexed(){
       return view('admin.setting.settings');
   }
   public function save(Request $request){
       $setting = new setting();
       $setting->email = $request->email;
       $setting->phoneNumber = $request->phoneNumber;

       $setting->save();

       return redirect('/setting/save')->with('message','Data inserted successfully');

   }
   public function show(){
       $set['settingForWel'] = Setting::get();

       return view('admin.setting.showSetting',$set);
   }
   public function delete(Request $request){
       Setting::find($request->id)->delete();
       return redirect()->back();

   }
}

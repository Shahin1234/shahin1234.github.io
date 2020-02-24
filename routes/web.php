<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//login & registration
//Route::get('/login','AuthController@login')->name('login');
//Route::post('/login-post','AuthController@loginPost')->name('loginPost');
//Route::get('/register','RegisterController@register')->name('register');
//Route::get('/register','RegisterController@register')->name('register');
Route::post('/register-post','RegisterController@registerPost')->name('registerPost');
//Route::post('/register-post','AuthController@registerPost')->name('registerPost');
Route::get('/reset-password','AuthController@resetPassword')->name('resetPassword');
Route::get('logout', 'AuthController@logout')->name('logout');

//chat
Route::get('/chat','ChatController@chat')->name('chat');
Route::get('/', 'WelcomeController@welcome')->name('home');
Route::get('/welcome2', 'WelcomeController@welcome2');

Route::get('/admin10', 'AdminController@index')->name('adminIndex');
Route::get('blogs', 'BlogController@blogList');
//Route::get('setting', 'BlogController@setting10');
Route::get('blog/add', 'BlogController@blogAdd');
Route::get('blog/edit', 'BlogController@blogEdit');

Route::post('blog/save', 'BlogController@blogSave');
Route::get('blog/delete', 'BlogController@blogDelete');
Route::post("/direct_chat", "ChatController@save")->name("message.save");
//Route::get('/direct_chat/{$user_id}','ChatController@direct_chat')->('direct.chat');

Auth::routes();
//Route::get('profile', function () {
//    // Only authenticated users may enter...
//})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/setting/save','settingController@indexed');
Route::post('/setting/save','settingController@save');
Route::get('/setting/show','settingController@show');
Route::get('/setting/delete','settingController@delete');
Route::get('cDetails','WelcomeController@detailsContact')->name('cDetails');
Route::get('/about/me','WelcomeController@about');
Route::get('/destination','WelcomeController@destination');
Route::get('/home/details','BlogController@home');

Route::post("blog.comment.save/{blog}", "ComentController@store")->name("blog.comment.save");
Route::post("mSave/{messageId}", "ChatController@messageSaved")->name("mSave");

Route::post('messSL','ChatController@messSelectListSearch');
Route::get('messSL','ChatController@messSelectListSearch');

//Route ::post('comment/{$blog}','ComentController@store')->name('comment.store');
//Route ::get('comment12/{$blog}','ComentController@storeRe');

Route::get("info/{pid}","WelcomeController@displayPersonalInfoDetails")->name("userInfo");


// upvote downvote
Route::get('upAnsSave/{id}/{bool}','UpDownController@saveAnsUpVote')->name('upAnsSave');
Route::get('upDownRepSave/{id}/{bool}','UpDownController@saveRepUpVote')->name('upDownRepSave');
//    Route::post('upAnsSave','UpDownController@saveAnsUpVote')->name('upAnsSave');



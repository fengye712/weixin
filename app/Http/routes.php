<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/index','IndexController@index');
Route::any('/verify','IndexController@verify');
Route::any('/test',function (){
echo 'hello world';
});
//创建消息
Route::any('/createMeeting',"IndexController@createMeeting");
//发送消息
Route::any('/sendMessage',"IndexController@sendMessage");
//获取ID
Route::any('/code',"IndexController@code");




 //后台的展示
Route::get('admin/main', 'admin\IndexController@main');
Route::get('admin/index', 'admin\IndexController@index');
Route::get('admin/top', 'admin\IndexController@top');
Route::get('admin/left', 'admin\IndexController@left');
Route::get('admin/login_out', 'admin\LoginController@login_out');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

});

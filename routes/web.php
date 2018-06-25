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

//Route::get('/', function () {
//    return view('welcome');
//});

//主页面
Route::get('/','Index@index')->name('index');
//注册页面
Route::get('/regist','Register@index')->name('reg');
//提交注册信息
Route::post('/regist','Register@reg')->name('regist');

//登陆凳面
Route::get('/login','Login@index')->name('log');

//提交登陆
Route::post('/login','Login@log')->name('log');

//退出登录
Route::get('/logout','Login@logout')->name('logout');

//文章资源控制器
Route::resource('/article','Atricle');
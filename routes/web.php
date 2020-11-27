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

Route::get('/', function () {
    return view('welcome');
});


//路由指定控制器  不带模块的
// Route::get('index', 'IndexController@index');

//带模块的  自己起的   模块\ 控制器名 @ 方法名
// Route::get('index', 'Index\IndexController@index');

//传参{参数名}   参数名后面带问号[可有可无]
// Route::get('index/{page?}', 'Index\IndexController@index');


//路由分组     自己起
Route::prefix('index')->group(function () {
	$path = 'Index\IndexController';
			// 自己起    模块\控制器@方法
	Route::get('nav1', $path.'@index1');
	Route::get('nav2', $path.'@index2');
	Route::get('nav3', $path.'@index3');
});

git@github.com:yangkaiqiang/php49.git

<link rel="stylesheet" type="text/css" href="{{asset('../resources/assets/home') }}/css/common.css"/>
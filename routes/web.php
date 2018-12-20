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


// master : 在18行定义user路由
Route::resource('admin/user','UserController');

// lisi : 在18行定义goods路由
Route::resource('admin/goods','GoodsController');

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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('user_res/blog');
});



Route::auth();

Route::get('post/', function(){
	return view('user_res/post');
})->name('post');


Route::group(['middleware' => 'auth'], function () {	
	Route::get('/home', function () {
	    return view('home');
	});
});

Route::get('admin-panel/', function(){
	return view('admin_res.home');
})->name('admin');


Route::resource('admin-panel/topic','admin\topicController');
Route::resource('admin-panel/tag','admin\tagController');
Route::resource('admin-panel/category','admin\categoryController');




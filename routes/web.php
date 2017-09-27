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

Route::group(['middleware'=>['web']],function(){
	
	// API route group that we need to protect
	Route::get('/api/movie/search','MovieController@searchMovie');
	Route::group(['middleware'=>['api']],function () {
		Route::resource('/api/movie','MovieController');
	});
	
	Route::get('/', function () {
	    return view('index');
	});
	Route::any('{any}',function(){
		return view('index');
	})->where('any','.*');
});
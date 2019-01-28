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

// Route::get('/', function () {
// 	dd('data');
//     return view('welcome');
// });

Route::domain('{sub}.atnarasi.com')->group(function ($a) {
	Route::get('/', function($sub){
		return view($sub);
	});
});
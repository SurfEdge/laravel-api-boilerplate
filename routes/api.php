<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user/hello',function(Request $request){
	return "Hello World from GET Request";
});

Route::post('/user/hello',function(Request $request){
	return "Hello World from POST Request";
});

// Route for the student controller
Route::get('/user/student','studentController@index');
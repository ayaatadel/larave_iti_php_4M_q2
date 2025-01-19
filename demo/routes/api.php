<?php

use App\Http\Controllers\API\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/hello',function(){
    return "Hello from api";
});

Route::apiResource('students',StudentController::class);



/*
 *GET|HEAD        api/hello ..........................................................................
  GET|HEAD        api/students .......................... students.index › API\StudentController@index
  POST            api/students .......................... students.store › API\StudentController@store
  GET|HEAD        api/students/{student} .................. students.show › API\StudentController@show
  PUT|PATCH       api/students/{student} .............. students.update › API\StudentController@update
  DELETE          api/students/{student} ............ students.destroy › API\StudentController@destroy

 */

// route /api/url
// http://127.0.0.1:8000/api/hello

//

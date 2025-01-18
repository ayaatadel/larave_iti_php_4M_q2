<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     // return "ayaat";
//     $users = [
//         ["id" => 1, "name" => "ayaat", "age" => 24],
//         ["id" => 2, "name" => "nada", "age" => 25],
//         ["id" => 3, "name" => "eman", "age" => 23],
//     ];
//     // return $users;
//     // name of view  ==> data
//     // key==> variable
//     return view('usersData', ["users" => $users]);
// });
// Route::get('/users/{id}', function ($id) {
//     // return "ayaat";
//     $users = [
//         ["id" => 1, "name" => "ayaat", "age" => 24],
//         ["id" => 2, "name" => "nada", "age" => 25],
//         ["id" => 3, "name" => "eman", "age" => 23],
//     ];
//     if ($id < count($users)) {

//         return $users[$id];
//     } else {
//         // return "Not Found";
//         return abort(404);
//     }
// })->where('id', '[0-9]+');


Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/create',[StudentController::class,'create'])->name('students.create');

Route::get('/students/{id}', [StudentController::class, 'view'])->name('students.view');


Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');

Route::post('/students/store',[StudentController::class,'store'])->name('students.store');


// edit sepecfic student ==> id
Route::get('/students/{id}/edit',[StudentController::class,'edit'])->name('students.edit');

// update on student data
Route::put('/students/{id}/update',[StudentController::class,'update'])->name('students.update');

// Route resource ==> handle all routes
// list all route ===> php artisan route:list

Route::resource('tracks', TrackController::class);
/*   method          url                   route name      method in controller
 *  GET|HEAD        tracks ............... tracks.index › TrackController@index
  POST            tracks ............... tracks.store › TrackController@store
  GET|HEAD        tracks/create ...... tracks.create › TrackController@create
  GET|HEAD        tracks/{track} ......... tracks.show › TrackController@show
  PUT|PATCH       tracks/{track} ..... tracks.update › TrackController@update
  DELETE          tracks/{track} ... tracks.destroy › TrackController@destroy
  GET|HEAD        tracks/{track}/edit .... tracks.edit › TrackController@edit
  GET|HEAD        up ........................................................


 */



/***
 * get ==> get data
 * post ===> store data
 * put ==> update on data
 * delete ==> delete data
 */
/**
 * Clear route:cache
 * php artisan route:clear
 * Clear cache
 * php artisan cache:clear
 */

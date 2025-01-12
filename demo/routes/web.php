<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',function(){
// return "ayaat";
$users=[
    ["id"=>1,"name"=>"ayaat","age"=>24],
    ["id"=>2,"name"=>"nada","age"=>25],
    ["id"=>3,"name"=>"eman","age"=>23],
];
// return $users;
            // name of view  ==> data
                         // key==> variable
return view('usersData',["users"=>$users]);
});
Route::get('/users/{id}',function($id){
// return "ayaat";
$users=[
    ["id"=>1,"name"=>"ayaat","age"=>24],
    ["id"=>2,"name"=>"nada","age"=>25],
    ["id"=>3,"name"=>"eman","age"=>23],
];
if($id<count($users))
{

    return $users[$id];
}else{
    // return "Not Found";
    return abort(404);
}
})->where('id','[0-9]+');

/***
 * get ==> get data
 * post ===> store data
 * put ==> update on data
 * delete ==> delete data
 */

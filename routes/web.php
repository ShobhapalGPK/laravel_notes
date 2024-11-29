<?php

use App\Http\Controllers\dbms;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\taskcontroller;
use App\Models\signuptbl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('form1','form1');
Route::post('ffirstcode',[taskcontroller::class,'form1']);



Route::view('form2','form2');
route::post('fsecondcode',[taskcontroller::class,'form2']);

Route::view('dbms','dbms');
Route::post('dbmscode',[dbms::class,'dbms']);

// Route::view('dbmsshow','dbmsshow');
// show file
           // url name  controller  function name
Route::get('dbmsshow',[dbms::class,'dbmsshow']);

// delete route
           // url
Route::get('dbmsdelete/{id}',[dbms::class,'dbmsdelete']);

Route::get('dbmsedit/{id}',[dbms::class,'dbmsedit']);

Route::post('dbmsupdate',[dbms::class,'dbmsupdate']);


Route::view('signup','signup');
Route::post('signupcode',[signupcontroller::class,'signupcode']);
Route::view('login','login');
Route::post('logincode',[signupcontroller::class,'logincode']);

Route::view('dashboard','dashboard');
route::view('changepassword','changepassword');
route::post('changepasscode',[signupcontroller::class,'changepasscode']);
route::get('logout',[signupcontroller::class,'logout']);
route::get('profile',[signupcontroller::class,'profile']);

route::post('profilecode',[signupcontroller::class,'profilecode']);

route::view('forgetpassword','forgetpassword');
route::post('forgetpasswordcode',[signupcontroller::class,'forgetpasswordcode']);

route::view('otp','otp');
route::post('otpcode',[signupcontroller::class,'otpcode']);
route::view('cpass','cpass');

route::post('cpasscode',[signupcontroller::class,'cpasscode']);





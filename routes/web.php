<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\DataController;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('user',[UserController::class,'getUser']);
Route::get('about',[UserController::class,'aboutUser']);
Route::get('user',[UserController::class,'getUserName']);
Route::get('admin',[UserController::class,'adminLogin']);

Route::view('/home','home');
Route::view('/about','about');

Route::view('user-form','user-form');
Route::post('adduser',[UserController::class,'addUser']);

Route::view('user-form2','user-form2');
Route::post('userform2',[UserController::class,'addUser2']);



Route::get('user-contact/{contact}',[DataController::class,'userContact']);

Route::get('home-user',[UserController::class,'home_user']);

Route::POST('userform',[UserController::class,'userform']);

Route::view('home/page/done','define-name')->name('hm');
Route::view('home/page/{name}','define-name')->name('user');

Route::get('show',[HomeController::class,'show']);
Route::get('user',[HomeController::class,'user']);


Route::get('users', [UserController::class, 'users']);

Route::get('getstudent',[studentController::class,'getStudents']);

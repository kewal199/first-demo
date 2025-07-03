<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\DataController;

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
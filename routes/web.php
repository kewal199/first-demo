<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/user',[UserController::Class,'users']);
Route::get('/view-user', [UserController::class, 'viewData'])->name('view-user.get');

Route::post('/update-user/{id}',[UserController::Class,'updateData'])->name('update-user');
Route::post('/delete-row/{id}', [UserController::class, 'deleteRow'])->name('delete-row'); 

Route::view('/user-form','user');
Route::post('/insert-data', [UserController::class,'insertData'])->name('insert-data');

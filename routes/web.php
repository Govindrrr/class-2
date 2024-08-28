<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [UserController::class,'Homepage'])->name('home');
Route::get('/about', [UserController::class,'Aboutpage']);
Route::post('/store-course',[UserController::class,'Main']);
Route::put('/edit-course/{id}',[UserController::class,'Edit']);
Route::delete('/delete/{id}',[UserController::class, 'Delete']);
Route::get('/update/{id}',[UserController::class, 'Update'])->name('update');
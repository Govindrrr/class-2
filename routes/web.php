<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdmissionController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [UserController::class,'Homepage'])->name('home');
Route::get('/about', [UserController::class,'Aboutpage']);
Route::post('/store-course',[UserController::class,'Main']);
Route::put('/edit-course/{id}',[UserController::class,'Edit']);
Route::delete('/delete/{id}',[UserController::class, 'Delete']);
Route::get('/update/{id}',[UserController::class, 'Update'])->name('update');

Route::get('/admission', [AdmissionController::class,'admission'])->name('admission');
Route::post('/store-admission', [AdmissionController::class,'store_admission'])->name('store-admission');


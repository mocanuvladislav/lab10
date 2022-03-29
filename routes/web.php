<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GroupController;

Route::get('/',[MainController::class,'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('groups', GroupController::class)->middleware('auth');
Route::resource('students', StudentController::class)->middleware('auth');
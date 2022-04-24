<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostingController;


// Get methods
Route::get("/",[RoutingController::class,'index'])->name('home');
Route::get('/login',[RoutingController::class,'login'])->name('login');
Route::get('/register',[RoutingController::class,'register'])->name('register');
Route::get('/post',[RoutingController::class,'post'])->middleware('auth')->name('post');
Route::get('/profile',[RoutingController::class,'profile'])->name('profile');
Route::get('/change',[RoutingController::class,'dashp'])->name('change');
//Post routes
Route::post('/register',[LoginController::class,'register'])->middleware('guest')->name('register');
Route::post('/post',[PostingController::class,'post'])->name('post');
Route::post('/post/delete/{id}',[RoutingController::class, 'delete'] )->name('delete');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/change',[RoutingController::class,'changepass'])->name('changepwd');

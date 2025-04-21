<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/','front.index')->name('index');

//Dashboard Routes
Route::prefix('/dashboard')->group(function(){
       Route::get('/',function (){
           return view ('dashboard.index');
       });
       Route::get('/news',function (){
           return view ('dashboard.allNews');
       });
       Route::get('/news/create',function (){
           return view ('dashboard.create-article');
       });
       Route::get('/news/edit',function (){
           return view ('dashboard.editNews');
       });

});

// Auth Routes

Route::view('/register' , 'auth.register')->name('register');
Route::post('/register' , [AuthController::class , 'register'])->name('registerController');
Route::view('/login' , 'auth.login')->name('login');
Route::post('/login' , [AuthController::class , 'login'])->name('loginController');
Route::post('/logout' , [AuthController::class , 'logout'])->name('logout');


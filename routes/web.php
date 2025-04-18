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


Route::prefix('/auth')->middleware('guest')->group(function() {
    Route::view('/login', 'auth.login')->name('login');
    // Route::post('/login', [AuthController::class, 'login']);
    Route::view('/register', 'auth.register')->middleware('guest')->name('register');
    // Route::post('/register', [AuthController::class, 'register']);
//Reset Password
//Route #1
    Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
//Route #2
    // Route::post('/forgot-password', [AuthController::class, 'sendResetPasswordLink']);
//Route #3
    // Route::get('/reset-password/{token}', [AuthController::class, 'resetPasswordToken'])->name('password.reset');
    // Route::post('/reset-password', [AuthController::class, 'passwordUpdate'])->name('password.update');

//Auth Social Login-Register
//Route::get('auth/{driver}/redirect',[SocialLoginController::class,'redirect'])->where('google|github');

    // Route::get('auth/{driver}/redirect', [SocialLoginController::class, 'redirect'])->name('auth.redirect');
    // Route::get('auth/{driver}/callback', [SocialLoginController::class, 'callback'])->name('auth.callback');
});

<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\FileManagerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'front.index')->name('home');

//Dashboard Routes
Route::prefix('/dashboard')->middleware('auth')->group(function () {

    Route::middleware('role:admin')->group(function(){


        // Category Routes
        Route::prefix('/article/category')->group(function(){
            Route::get('/' , [CategoryController::class , 'index'])->name('category.index');
            Route::post('/' , [CategoryController::class , 'store'])->name('category.store');
            Route::get('/edit/{category}' , [CategoryController::class , 'edit'])->where('id' , '[0-9]+')->name('category.edit');
            Route::put('/update/{category}' , [CategoryController::class , 'update'])->where('id' , '[0-9]+')->name('category.update');
            Route::delete('/destroy/{category}' , [CategoryController::class , 'destroy'])->where('id' , '[0-9]+')->name('category.destroy');
        });



        Route::get('/news/comments', function () {
            return view('dashboard.comments');
        });
        Route::get('/users', function () {
            return view('dashboard.users');
        });

    });

    Route::middleware('role:admin|author')->group(function(){

        Route::resource('article' , ArticleController::class);

        Route::get('/file-manager' , [FileManagerController::class , 'index'])->name('file-manager.index');
        Route::post('/file-manager' , [FileManagerController::class , 'store'])->name('file-manager.store');
        
        Route::get('/', function () {
            return view('dashboard.index');
        });
        Route::get('/news', function () {
            return view('dashboard.allNews');
        });

        Route::get('/news/edit', function () {
            return view('dashboard.editNews');
        });
        Route::get('/profile', function () {
            return view('dashboard.editNews');
        });

    });

});


Route::prefix('/auth')->middleware('guest')->group(function () {

    // Auth Routes
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('registerController');
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('loginController');

    // reset Password
    Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');
    Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'updatePassword'])->name('password.update');

    //Auth Social
    Route::get('/{driver}/redirect', [SocialLoginController::class, 'redirect'])->name('authSocial.redirect');
    Route::get('/{driver}/callback', [SocialLoginController::class, 'callback'])->name('authSocial.callback');
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

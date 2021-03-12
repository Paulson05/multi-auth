<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('pages/home', [PagesController::class, 'index'])->name('pages.welcome');

Route::get('pages/signup', [PagesController::class, 'SignUp'])->name('pages.signup');
Route::post('pages/signup', [PagesController::class, 'getSignUp'])->name('pages.signup');
Route::get('pages/login', [PagesController::class, 'login'])->name('pages.login');
Route::post('pages/login', [PagesController::class, 'postlogin'])->name('postlogin');




Route::prefix('admin')->group(function (){
    Route::resource('admin', AdminController::class)->only(['index','store','show','update','destroy','edit', 'create', ]);
    Route::resource('users', UsersController::class)->only(['index','store','show','update','destroy','edit', 'create', ]);

});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'index'])->name('pages.welcome');

Route::get('pages/signup', [PagesController::class, 'SignUp'])->name('pages.signup');
Route::post('pages/signup', [PagesController::class, 'getSignUp'])->name('pages.signup');
Route::get('pages/login', [PagesController::class, 'login'])->name('pages.login');
Route::post('pages/login', [PagesController::class, 'postlogin'])->name('postlogin');
Route::get('pages/signout', [PagesController::class, 'getSignout'])->name('getSignout');




Route::resource('admins', AdminController::class)->only(['index','store','show','update','destroy','edit', 'create', ])->middleware('auth:admin');

Route::prefix('admin')->group(function (){
    Route::get('/login', [AdminController::class, 'getLogIN'])->name('admin.login');
    Route::post('/post/login', [AdminController::class, 'adminLogIn'])->name('admin.adminLogIn');
    Route::get('/logout', [AdminController::class, 'getLogOut'])->name('admin.logout');
    Route::resource('users', UsersController::class)->only(['index','store','show','update','destroy','edit', 'create', ]);

});

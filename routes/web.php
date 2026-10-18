<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VendorLoginController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/category/{slug}/{id}', [CategoryController::class, 'detail'])
    ->name('category.detail');


Route::get('/vendor/register',[RegisterController::class,'create'])
->name('vendor.register');
Route::post('/vendor/register',[RegisterController::class,'store'])
->name('vendor.register.store');


Route::get ('/vendor/login',[VendorLoginController::class,'showLogin'])
->name('vendor.login');
Route::post('/vendor/login',[VendorLoginController::class,'login'])
->name('vendor.login.submit');
Route::get('/vendor/dashboard',[VendorLoginController::class,'dashboard'])
->name('vendor.dashboard');
Route::post('/vendor/logout',[VendorLoginController::class,'logout'])
->name('vendor.logout');
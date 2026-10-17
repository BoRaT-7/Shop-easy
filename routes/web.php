<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/category/{slug}/{id}', [CategoryController::class, 'detail'])
    ->name('category.detail');

Route::get('/register',function(){
    return view('auth.register');
})->name('register');

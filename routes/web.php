
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VendorLoginController;
use App\Http\Middleware\VendorMiddleware;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/category/{slug}/{id}', [CategoryController::class, 'detail'])
    ->name('category.detail');

// Vendor Registration
Route::get('/vendor/register', [RegisterController::class, 'create'])
    ->name('vendor.register');

Route::post('/vendor/register', [RegisterController::class, 'store'])
    ->name('vendor.register.store');

// Vendor Login
Route::get('/vendor/login', [VendorLoginController::class, 'showLogin'])
    ->name('vendor.login');

Route::post('/vendor/login', [VendorLoginController::class, 'login'])
    ->name('vendor.login.submit');

// Vendor Dashboard
Route::get('/vendor/dashboard', [VendorLoginController::class, 'dashboard'])
    ->middleware(VendorMiddleware::class)
    ->name('vendor.dashboard');

// Vendor Logout
Route::post('/vendor/logout', [VendorLoginController::class, 'logout'])
    ->name('vendor.logout');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VendorLoginController;
use App\Http\Middleware\VendorMiddleware;
use App\Http\Controllers\Admin\AdminController;



Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/category/{slug}/{id}', [
    CategoryController::class,
    'detail',
])->name('category.detail');

// Registration
Route::get('/vendor/register', [
    RegisterController::class,
    'create',
])->name('vendor.register');

Route::post('/vendor/register', [
    RegisterController::class,
    'store',
])->name('vendor.register.store');

// Login
Route::get('/vendor/login', [
    VendorLoginController::class,
    'showLogin',
])->name('vendor.login');

Route::post('/vendor/login', [
    VendorLoginController::class,
    'login',
])->name('vendor.login.submit');

// Protected routes
Route::middleware(VendorMiddleware::class)->group(function () {
    Route::get('/vendor/dashboard', [
        VendorLoginController::class,
        'dashboard',
    ])->name('vendor.dashboard');

    Route::post('/vendor/logout', [
        VendorLoginController::class,
        'logout',
    ])->name('vendor.logout');
});




 // Admin category routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/admin/add-category', [AdminController::class, 'addCategory'])
    ->name('admin.categories.create');

Route::post('/admin/add-category', [AdminController::class, 'storeCategory'])
    ->name('admin.categories.store');
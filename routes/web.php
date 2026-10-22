
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VendorLoginController;
use App\Http\Middleware\VendorMiddleware;
use App\Http\Controllers\Admin\AdminController;


// Home
Route::get('/', [HomeController::class, 'index'])
    ->name('home');


// Public Category Details
Route::get('/category/{slug}/{id}', [
    CategoryController::class,
    'detail',
])->name('category.detail');


// Vendor Registration
Route::get('/vendor/register', [
    RegisterController::class,
    'create',
])->name('vendor.register');

Route::post('/vendor/register', [
    RegisterController::class,
    'store',
])->name('vendor.register.store');


// Vendor Login
Route::get('/vendor/login', [
    VendorLoginController::class,
    'showLogin',
])->name('vendor.login');

Route::post('/vendor/login', [
    VendorLoginController::class,
    'login',
])->name('vendor.login.submit');


// Protected Vendor Routes
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


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {

    // Admin Dashboard
    Route::get('/dashboard', [
        AdminController::class,
        'dashboard',
    ])->name('dashboard');


    // Category Management
    Route::get('/categories', [
        AdminController::class,
        'categories',
    ])->name('categories.index');

    Route::get('/add-category', [
        AdminController::class,
        'addCategory',
    ])->name('categories.create');

    Route::post('/add-category', [
        AdminController::class,
        'storeCategory',
    ])->name('categories.store');

    Route::get('/categories/{id}/edit', [
        AdminController::class,
        'editCategory',
    ])->name('categories.edit');

    Route::put('/categories/{id}', [
        AdminController::class,
        'updateCategory',
    ])->name('categories.update');

    Route::delete('/categories/{id}', [
        AdminController::class,
        'deleteCategory',
    ])->name('categories.destroy');

});

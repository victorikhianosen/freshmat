<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminTagController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Staff\StaffAuthController;
use Illuminate\Support\Facades\Route;






Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('customer', [CustomerAuthController::class, 'index'])->name('customer.login');


// Auth
Route::prefix('admin')->name('admin.')->group(function () {


    Route::middleware(['guest:isadmin'])->group(function () {
        Route::post('register', [AdminAuthController::class, 'register'])->name('register.store');
        Route::post('login', [AdminAuthController::class, 'login'])->name('login.store');
        Route::get('login', [AdminAuthController::class, 'index'])->name('login');
        Route::get('register', [AdminAuthController::class, 'showRegister'])->name('register');
    });


    Route::group(['middleware' => ['isadmin:isadmin']], function () {
        Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
        Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('change/password', [AdminAuthController::class, 'createChangePassword'])->name('change.password');
        Route::post('change/password', [AdminAuthController::class, 'changePassword'])->name('change.password.store');


        Route::get('product', [AdminProductController::class, 'index'])->name('product');
        Route::get('product/create', [AdminProductController::class, 'create'])->name('product.create');
        Route::post('product/store', [AdminProductController::class, 'store'])->name('product.store');
        Route::get('product/{id}', [AdminProductController::class, 'destroy'])->name('product.destroy');


        Route::get('category', [AdminCategoryController::class, 'index'])->name('category');
        Route::post('category/store', [AdminCategoryController::class, 'store'])->name('category.store');
        Route::get('category/delete/{id}', [AdminCategoryController::class, 'delete'])->name('category.delete');
        Route::put('category/update/{id}', [AdminCategoryController::class, 'update'])->name('category.update');

        Route::get('tag', [AdminTagController::class, 'index'])->name('tag');
        Route::post('tag/store', [AdminTagController::class, 'store'])->name('tag.store');
        Route::get('tag/delete/{id}', [AdminTagController::class, 'delete'])->name('tag.delete');
        Route::put('tag/update/{id}', [AdminTagController::class, 'update'])->name('tag.update');

    });



});




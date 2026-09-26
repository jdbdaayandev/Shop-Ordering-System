<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

//AUTH
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth.login.attempt');
Route::get('/register', [AuthController::class, 'show_register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//Customer
Route::get('/', [OrderController::class, 'index']);
Route::get('/item-description', [OrderController::class, 'order_desc']);

//Admin
Route::middleware('admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin/dashboard');
        })->name('dashboard');

        Route::prefix('items')->group(function () {
            Route::get('', [ItemController::class, 'index'])->name('items.index');
            Route::post('/create', [ItemController::class, 'store'])->name('items.create');
        });
    });

});


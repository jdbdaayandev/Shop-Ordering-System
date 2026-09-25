<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [OrderController::class, 'index']);
Route::get('/item-description', [OrderController::class, 'order_desc']);
Route::get('admin', function ()
{
    return view('admin/dashboard');
});

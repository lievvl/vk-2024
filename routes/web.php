<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::post('api/v1/user/orders', [Controllers\OrdersController::class, 'order_items'])->name('order.submit');
    Route::get('api/v1/user/orders', [Controllers\OrdersController::class, 'show_orders'])->name('order.show');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackofficeController;

Route::get('/', [HomeController::class, 'home_index']);

Route::get('/product', [ProductController::class, 'product_index']);

Route::get('/product/{id}', [ProductController::class, 'show'])->name('show.product');

Route::get('/cart', [CartController::class, 'cart_index']);

Route::get('/backoffice', [BackofficeController::class, 'backoffice_index']);

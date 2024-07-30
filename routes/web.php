<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [HomeController::class, 'home_index']);

Route::get('/product', [ProductController::class, 'product_index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/cart', [CartController::class, 'cart_index']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\GuitarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/categoria/{categoryId?}', [ShopController::class, 'index']);
Route::get('/shop/carritoAdd/{guitarra?}', [ShopController::class, 'index']);
Route::get('/shop/guitarra/{guitarra}', [GuitarController::class, 'show']);
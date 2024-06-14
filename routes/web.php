<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/guitarra/{guitarra}', [ShopController::class, 'show']);
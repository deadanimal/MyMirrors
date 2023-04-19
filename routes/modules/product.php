<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/products', [ProductController::class, 'product_list']);
Route::get('/products/{id}', [ProductController::class, 'product_view']);

Route::middleware('auth')->group(function () {

    Route::post('/products', [ProductController::class, 'product_create']);
    Route::put('/products/{id}', [ProductController::class, 'product_update']);
    
});

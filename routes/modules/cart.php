<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {

    Route::get('/carts', [cartController::class, 'cart_list']);
    Route::get('/carts/{id}', [cartController::class, 'cart_view']);

    Route::post('/carts', [cartController::class, 'cart_create']);
    
    Route::put('/carts/{cart_id}/add', [cartController::class, 'cart_add_products']);
    Route::put('/carts/{cart_id}/remove', [cartController::class, 'cart_remove_products']);
    Route::put('/carts/{cart_id}/shipping', [cartController::class, 'cart_edit_shipping']);
    Route::put('/carts/{cart_id}/payment', [cartController::class, 'cart_edit_payment']);
    
});

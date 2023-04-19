<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'profile_list']);
    Route::post('/profile', [ProfileController::class, 'profile_create']);
    Route::put('/profile', [ProfileController::class, 'profile_update']);
    
});

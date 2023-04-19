<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'home']);
Route::get('/explore', [SiteController::class, 'explore']);


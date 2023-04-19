<?php

use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;


Route::get('/about', [StaticController::class, 'about']);


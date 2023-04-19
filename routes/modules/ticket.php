<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {

    Route::get('/tickets', [InvoiceController::class, 'ticket_list']);
    Route::get('/tickets/{id}', [InvoiceController::class, 'ticket_view']);
    Route::put('/tickets/{ticket_id}', [InvoiceController::class, 'ticket_update']);
    Route::put('/tickets/{ticket_id}/reply', [InvoiceController::class, 'ticket_reply']);
    
});

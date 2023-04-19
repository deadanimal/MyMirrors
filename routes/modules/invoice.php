<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {

    Route::get('/invoices', [InvoiceController::class, 'invoice_list']);
    Route::get('/invoices/{id}', [InvoiceController::class, 'invoice_view']);
    Route::put('/invoices/{invoice_id}/pay', [InvoiceController::class, 'invoice_pay']);
    Route::put('/invoices/{invoice_id}/dispute', [InvoiceController::class, 'invoice_dispute']);
    
});

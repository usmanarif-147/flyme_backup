<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::group(['prefix' => '/admin','middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
    Route::get('/payment-transactions', [AdminController::class, 'paymentTransactions'])->name('admin.payment.transactions');
    Route::get('/pilots', [AdminController::class, 'pilots'])->name('admin.pilots');
    Route::get('/pilot-details', [AdminController::class, 'pilotDetails'])->name('admin.pilot.details');
    Route::get('/update-password', [AdminController::class, 'updatePassword'])->name('admin.updated.password');
});


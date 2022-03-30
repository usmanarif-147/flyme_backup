<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pilot\PilotController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/pilot','middleware' => 'pilot'], function () {
    Route::get('/dashboard', [PilotController::class, 'dashboard'])->name('pilot.dashboard');
    Route::post('/store-slot', [PilotController::class, 'storeSlot'])->name('pilot.store.slot');
    Route::post('/remove-slot', [PilotController::class, 'removeSlot'])->name('pilot.remove.slot');
    Route::post('/get-selected-slots', [PilotController::class, 'getSelectedSlots'])->name('pilot.get.selected.slots');
    Route::get('/slots-ajax', [PilotController::class, 'slots'])->name('pilot.slots.ajax');
    Route::get('/bookings', [PilotController::class, 'bookings'])->name('pilot.bookings');
    Route::get('/update-password', [PilotController::class, 'updatePassword'])->name('pilot.update.password');
});

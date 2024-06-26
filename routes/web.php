<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringController;


Route::get('/', [MonitoringController::class, 'wartsila'])->name('wartsila');
Route::get('/storage-tank-gauge', [MonitoringController::class, 'storageTankGauge'])->name('storage-tank-gauge');
Route::get('/cargo-tank', [MonitoringController::class, 'cargoTank'])->name('cargo-tank');
Route::get('/main-engine', [MonitoringController::class, 'mainEngine'])->name('main-engine');

Route::get('/realtime-wartsila', [MonitoringController::class, 'realtimWartsila'])->name('realtime-wartsila');
Route::get('/realtime-storage', [MonitoringController::class, 'realtimeStorage'])->name('realtime-storage');
Route::get('/realtime-cargo', [MonitoringController::class, 'realtimeCargo'])->name('realtime-cargo');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealtimeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\CertificateController;


Route::get('/', [MonitoringController::class, 'wartsila'])->name('wartsila');
Route::get('/storage-tank', [MonitoringController::class, 'storageTank'])->name('storage-tank');
Route::get('/cargo-tank', [MonitoringController::class, 'cargoTank'])->name('cargo-tank');
Route::get('/main-engine', [MonitoringController::class, 'mainEngine'])->name('main-engine');

/* CRUD */
Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate.index');
Route::post('/certificate/create', [CertificateController::class, 'store'])->name('certificate.store');
Route::get('/certificate/create', [CertificateController::class, 'create'])->name('certificate.create');
Route::get('/certificate/detail/{id}', [CertificateController::class, 'show'])->name('certificate.detail');
Route::post('/certificate/delete/{id}', [CertificateController::class, 'destroy'])->name('certificate.delete');
Route::get('/certificate/edit/{id}', [CertificateController::class, 'edit'])->name('certificate.edit');
Route::post('/certificate/update/{id}', [CertificateController::class, 'update'])->name('certificate.update');

/* Realtime */
Route::get('/realtime-wartsila', [RealtimeController::class, 'wartsila'])->name('realtime-wartsila');
Route::get('/realtime-storage', [RealtimeController::class, 'storage'])->name('realtime-storage');
Route::get('/realtime-cargo', [RealtimeController::class, 'cargo'])->name('realtime-cargo');
Route::get('/realtime-engine', [RealtimeController::class, 'engine'])->name('realtime-engine');

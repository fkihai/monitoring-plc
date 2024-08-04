<?php

use App\Http\Controllers\Api\CargoController;
use App\Http\Controllers\Api\EngineController;
use App\Http\Controllers\Api\StorageController;
use App\Http\Controllers\Api\WartsilaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/wartsila', [WartsilaController::class, 'store']);
Route::post('/cargo', [CargoController::class, 'store']);
Route::post('/storage', [StorageController::class, 'store']);
Route::post('/engine', [EngineController::class, 'store']);

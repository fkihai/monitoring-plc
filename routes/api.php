<?php

use App\Models\Storage;
use App\Models\Wartsila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\MonitoringResource;
use App\Http\Controllers\Api\CargoController;
use App\Http\Controllers\Api\EngineController;
use App\Http\Controllers\Api\StorageController;
use App\Http\Controllers\Api\WartsilaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/wartsila', [WartsilaController::class, 'store']);
Route::post('/cargo', [CargoController::class, 'store']);
Route::post('/storage', [StorageController::class, 'store']);
Route::post('/engine', [EngineController::class, 'store']);
Route::get('/length-data', function(){
    $dataLength = Wartsila::count();
    return new MonitoringResource(true,'get data success',$dataLength);
});

Route::get('/length-data-storage', function(){
    $dataLength = Storage::count();
    return new MonitoringResource(true,'get data success',$dataLength);
});

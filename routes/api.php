<?php

use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\TabletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tablets')->group(function () {
    Route::get('',[TabletController::class,'index'])
        ->name('tablets.index');
    Route::get('/{tablet}',[TabletController::class,'show'])
        ->whereNumber('tablet')
        ->name('tablets.show');
    Route::get('/create',[TabletController::class,'create'])
        ->name('tablets.create');
    Route::post('',[TabletController::class,'store'])
        ->name('tablets.store');
    Route::delete('/{tablet}',[TabletController::class,'destroy'])
        ->whereNumber('tablet')
        ->name('tablets.destroy');
});
Route::prefix('manufacturers')->group(function () {
    Route::get('',[ManufacturerController::class,'index'])
        ->name('manufacturers.index');
    Route::get('/{man}',[ManufacturerController::class,'show'])
        ->whereNumber('man')
        ->name('manufacturers.show');
    Route::get('/create',[ManufacturerController::class,'create'])
        ->name('manufacturers.create');
    Route::post('',[ManufacturerController::class,'store'])
        ->name('manufacturers.store');
    Route::delete('/{man}',[ManufacturerController::class,'destroy'])
        ->whereNumber('{man}')
        ->name('manufacturers.destroy');
});
Route::post('/auth',[\App\Http\Controllers\AuthController::class,'authenticate'])->name('auth.authenticate');

<?php

use App\Http\Controllers\API\CommandController;
use App\Http\Controllers\HandleController;
use App\Http\Controllers\IndoorMonitoringController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/commands', [CommandController::class, 'index']);
Route::post('/handle-action', [HandleController::class, 'handleAction']);
Route::post('/indoormonitoring', [IndoorMonitoringController::class, 'store']);

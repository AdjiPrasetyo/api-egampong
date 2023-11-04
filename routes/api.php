<?php

use App\Http\Controllers\Api\KkController;
use App\Http\Controllers\Api\KtpController;
use App\Http\Controllers\Api\InfoController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('kk', [KkController::class, 'index']);
Route::get('kk/{id}', [KkController::class, 'show']);
Route::post('kk/', [KkController::class, 'store']);
Route::put('kk/{id}', [KkController::class, 'update']);
Route::delete('kk/{id}', [KkController::class, 'destroy']);

Route::get('ktp', [KtpController::class, 'index']);
Route::get('ktp/{id}', [KtpController::class, 'show']);
Route::post('ktp/', [KtpController::class, 'store']);
Route::put('ktp/{id}', [KtpController::class, 'update']);
Route::delete('ktp/{id}', [KtpController::class, 'destroy']);

Route::get('info', [InfoController::class, 'index']);

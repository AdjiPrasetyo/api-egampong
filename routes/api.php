<?php

use App\Http\Controllers\Api\KkController;
use App\Http\Controllers\Api\KtpController;
use App\Http\Controllers\Api\InfoController;
use App\Http\Controllers\MeninggalController;
use App\Http\Controllers\PindahController;
use App\Models\Pindah;
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

Route::get('pindah', [PindahController::class, 'index']);
Route::get('pindah/{id}', [PindahController::class, 'show']);
Route::post('pindah/', [PindahController::class, 'store']);
Route::put('pindah/{id}', [PindahController::class, 'update']);
Route::delete('pindah/{id}', [PindahController::class, 'destroy']);

Route::get('meninggal', [MeninggalController::class, 'index']);
Route::get('meninggal/{id}', [MeninggalController::class, 'show']);
Route::post('meninggal/', [MeninggalController::class, 'store']);
Route::put('meninggal/{id}', [MeninggalController::class, 'update']);
Route::delete('meninggal/{id}', [MeninggalController::class, 'destroy']);

Route::get('info', [InfoController::class, 'index']);

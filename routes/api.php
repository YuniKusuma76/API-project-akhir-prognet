<?php

use App\Http\Controllers\AgamaApiController;
use App\Http\Controllers\AnggotakkApiController;
use App\Http\Controllers\HubungankkApiController;
use App\Http\Controllers\KkApiController;
use App\Http\Controllers\PendudukApiController;
use App\Http\Controllers\UserApiController;
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
//Route API Authentikasi
Route::post('/register', [UserApiController::class, 'register']);
Route::post('/login', [UserApiController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route API Master Data dan Transaksi
Route::apiResource('/agama', AgamaApiController::class);
Route::apiResource('/kk', KkApiController::class);
Route::apiResource('/hubungankk', HubungankkApiController::class);
Route::apiResource('/penduduk', PendudukApiController::class);
Route::apiResource('/anggotakk', AnggotakkApiController::class);

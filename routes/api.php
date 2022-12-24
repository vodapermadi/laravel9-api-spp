<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

route::group(['prefix' => 'project-spp'],function()
{
    // single table
    route::apiResource('officer',PetugasController::class);
    route::apiResource('kelaz',KelasController::class);
    route::apiResource('spp',SppController::class);
    
    // relationship
    route::apiResource('siswa',SiswaController::class);
    route::apiResource('pembayaran',PembayaranController::class);
});

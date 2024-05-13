<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\SpecialisteController;
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

Route::prefix('api')->group(function () {
    // Routes pour le modèle Dossier
    Route::apiResource('dossiers', DossierController::class);

    // Routes pour le modèle Consultation
    Route::apiResource('consultations', ConsultationController::class);

    // Routes pour le modèle Examen
    Route::apiResource('examens', ExamenController::class);

    // Routes pour le modèle Specialiste
    Route::apiResource('specialistes', SpecialisteController::class);
});

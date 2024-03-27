<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Assurez-vous d'importer AuthController correctement

// Route pour obtenir les informations de l'utilisateur actuellement connecté
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Groupez les routes qui ne nécessitent pas d'authentification
Route::post('/user/register', [AuthController::class, 'register']);
Route::post('/user/login', [AuthController::class, 'login']);

// Groupez les routes qui nécessitent une authentification
Route::middleware('auth:sanctum', 'verified')->group(function () {
    Route::post('/user/logout', [AuthController::class, 'logout']);
    Route::post('/user/refresh-token', [AuthController::class, 'refreshToken']);
    // Vous pouvez ajouter d'autres routes sécurisées ici
});

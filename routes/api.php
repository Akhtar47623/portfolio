<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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
Route::get('/portfolios', [PortfolioController::class, 'index']);
Route::post('/portfolios', [PortfolioController::class, 'store']);
Route::get('/portfolios/{id}', [PortfolioController::class, 'show']);
Route::put('/portfolios/{id}', [PortfolioController::class, 'update']);
Route::delete('/portfolios/{id}', [PortfolioController::class, 'destroy']);

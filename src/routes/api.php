<?php

use App\Http\Controllers\Api\PartController;
use App\Http\Controllers\Api\PartHistoryController;
use App\Http\Controllers\Api\UserController;
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

Route::apiResource('parts', PartController::class, ['only' => ['index', 'show']]);
Route::apiResource('history/parts', PartHistoryController::class);
Route::apiResource('users', UserController::class);

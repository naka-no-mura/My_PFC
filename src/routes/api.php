<?php

use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\FoodHistoryController;
use App\Http\Controllers\Api\FoodIconController;
use App\Http\Controllers\Api\PartController;
use App\Http\Controllers\Api\PartHistoryController;
use App\Http\Controllers\Api\TrainingController;
use App\Http\Controllers\Api\TrainingHistoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ImageController;
use App\Models\FoodIcon;
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
Route::apiResource('images', ImageController::class);
Route::apiResource('foods/icons', FoodIconController::class, ['only' => ['index']]);
Route::apiResource('history/parts', PartHistoryController::class);
Route::apiResource('trainings', TrainingController::class);
Route::apiResource('history/trainings', TrainingHistoryController::class);
Route::apiResource('foods', FoodController::class);
Route::apiResource('history/foods', FoodHistoryController::class);
Route::apiResource('users', UserController::class);

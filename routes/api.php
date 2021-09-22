<?php

use App\Http\Controllers\Api\v1\LoginController;
use App\Http\Controllers\Api\v1\RegistrationController;
use App\Http\Controllers\Api\v1\BoxController;
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
/*Route::apiResources([
    'boxes' => BoxController::class,
]);*/
Route::post('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::middleware('auth:sanctum')->apiResource('boxes', BoxController::class);


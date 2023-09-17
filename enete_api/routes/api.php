<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController;

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
Route::post('oauth/token', [AccessTokenController::class, 'issueToken'])->middleware(['api', 'throttle:60,1'])->name('passport.token');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

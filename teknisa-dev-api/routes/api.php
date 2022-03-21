<?php

use App\Http\Controllers\DevController;
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

Route::get('devs', [DevController::class, 'index']);
Route::get('dev/{id}', [DevController::class, 'show']);
Route::post('dev/', [DevController::class, 'store']);
Route::put('dev/{id}', [DevController::class, 'update']);
Route::delete('dev/{id}', [DevController::class, 'destroy']);

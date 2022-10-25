<?php

use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::controller(UserController::class)
    ->middleware('auth:api')
    ->group(function () {
    Route::post('users', 'store');
    Route::get('users/{id}', 'show');
    Route::put('users/{user}', 'update');
    Route::delete('users/{user}', 'destroy');
});

Route::controller(PurchaseController::class)
    ->middleware('auth:api')
    ->group(function () {
    Route::post('purchases', 'store');
});
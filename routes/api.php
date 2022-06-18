<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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

Route::post('login', [UsersController::class, 'authenticate']);
Route::post('register', [UsersController::class, 'register']);
Route::get('logout', [UsersController::class, 'logout']);
Route::get('user', [UsersController::class, 'get_user']);
Route::post('/upload', [UsersController::class, 'upload']);

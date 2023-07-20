<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\Api\UserController;
>>>>>>> 13fd46a81d4618cff366a1bd6a20b33930102f13
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
<<<<<<< HEAD
=======
Route::get("users",[UserController::class, 'index']);
Route::post("users.action",[UserController::class, 'participantAction']);

>>>>>>> 13fd46a81d4618cff366a1bd6a20b33930102f13

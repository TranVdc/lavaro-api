<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LavaroUsersController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post("/lavaro-users/store", [LavaroUsersController::class, "store"]);
Route::get("/lavaro-users/search-by-email/{email}", [LavaroUsersController::class, "getByEmail"]);
Route::post("/lavaro-users/login", [LavaroUsersController::class, "getByEmailandPassword"]);
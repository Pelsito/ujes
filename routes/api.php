<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Rua\RuaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::post("register",[RuaController::class,"register"]);
Route::post("login",[RuaController::class,"login"]);

Route::group([
    "middleware" => ["auth:api"]
            ], function(){
Route::get("profile",[RuaController::class,'profile']);
Route::get("logout",[RuaController::class,'logout']);                
                          });
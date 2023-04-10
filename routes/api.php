<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::get('get_user',[UserController::class,'get']);
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'mobile_login']);


// check user for login system
Route::get('logout',[UserController::class,'mobile_logout'])->middleware('auth:sanctum');
Route::get('check_user',[UserController::class,'check_user'])->middleware('auth:sanctum');
Route::get('get_all_user',[UserController::class,'get_all_user'])->middleware('auth:sanctum');
Route::get('get_user_one/{id}',[UserController::class,'get_user_one'])->middleware('auth:sanctum');

// api update user
Route::post('update_user/{id}',[UserController::class,'update_user'])->middleware('auth:sanctum');


// api delete user
Route::delete('delete_user/{id}',[UserController::class,'delete_user'])->middleware('auth:sanctum');


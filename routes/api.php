<?php

use App\Http\Controllers\Api\User\AuthApiController;
use App\Http\Controllers\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('login',[AuthApiController::class,'login']);
Route::post('register', [AuthApiController::class, 'register']);
Route::get('users',[UserApiController::class,'index']);
Route::get('user/{id}',[UserApiController::class,'show']);

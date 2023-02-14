<?php

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
Route::apiResource('posts',\App\Http\Controllers\BlogController::class);
Route::post('posts/create',[\App\Http\Controllers\BlogController::class,'create'])->name('create');
Route::put('posts/update/{id}',[\App\Http\Controllers\BlogController::class,'edit']);
Route::delete('posts/delete/{id}',[\App\Http\Controllers\BlogController::class, 'destroy']);


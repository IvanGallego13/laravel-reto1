<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/hello', [HelloController::class, 'greet']);
Route::get('/hello/{name}', [HelloController::class, 'greet']);
Route::get('/params/hello', [HelloController::class, 'greetWithParams']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sample', function (Request $request) {
    return  [
        'message' => 'Hello, world!',
        'status' => 'success',
        'timestamp' => now()->toDateTimeString(),
    ];
});

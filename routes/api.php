<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return response()->json([
        'message' => 'Hello, api!',
        'status' => 'success'
    ]);
});

Route::get('/login', [AuthController::class, 'login']);

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

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use \App\Models\Ticket;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/tickets', function () {
    return \App\Models\Ticket::all();
 
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
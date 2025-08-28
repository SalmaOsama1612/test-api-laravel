<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use \App\Models\Ticket;


Route::apiResource('tickets', \App\Http\Controllers\API\v1\TicketController::class);    

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
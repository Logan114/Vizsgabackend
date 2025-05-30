<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/szavak',[SzavakController::class, 'index']);
Route::get('/szavak/{id}',[SzavakController::class, 'show']);
Route::get('/tema',[TemaController::class, 'index']);
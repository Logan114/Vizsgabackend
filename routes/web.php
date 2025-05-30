<?php

use App\Http\Controllers\SzavakController;
use Illuminate\Support\Facades\Route;

Route::get('/sza', function () {
    return view('welcome');
});


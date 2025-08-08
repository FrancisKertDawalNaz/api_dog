<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

Route::get('/', function () {
    return view('dog');
});

Route::get('/dog', [DogController::class, 'show']);
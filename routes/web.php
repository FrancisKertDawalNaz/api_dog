<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('dog');
});

Route::get('/dog', [DogController::class, 'show']);

Route::get('/cat', [DogController::class, 'showAnother']);

Route::get('/joke', [DogController::class, 'jokes']);
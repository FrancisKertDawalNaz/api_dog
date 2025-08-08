<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('dog');
});

Route::get('/dog', [DogController::class, 'show']);

Route::get('/cat', function () {
    $response = Http::get('https://api.thecatapi.com/v1/images/search');

    if ($response->successful()) {
        $data = $response->json();
        $catImage = $data[0]['url'] ?? null;
    } else {
        $catImage = null;
    }

    return view('cat', compact('catImage'));
});
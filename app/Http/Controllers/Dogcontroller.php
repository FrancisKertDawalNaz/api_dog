<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DogController extends Controller
{
    public function show()
    {
        // Make API call to dog.ceo
        $response = Http::get('https://dog.ceo/api/breeds/image/random');

        // Check if successful
        if ($response->successful()) {
            $dogImage = $response->json()['message']; // Get the image URL
            return view('dog', ['dogImage' => $dogImage]);
        }

        // In case of API failure, still return the view with null
        return view('dog', ['dogImage' => null]);
    }

    public function showAnother()
    {
        $response = Http::get('https://api.thecatapi.com/v1/images/search');

        if ($response->successful()) {
            $data = $response->json();
            $catImage = $data[0]['url'] ?? null;
        } else {
            $catImage = null;
        }
        return view('cat', compact('catImage'));
    }

    public function jokes()
    {
        $response = Http::get('https://official-joke-api.appspot.com/random_joke');

        if ($response->successful()) {
            $joke = $response->json(); // contains 'setup' and 'punchline'
        } else {
            $joke = null;
        }

        return view('joke', compact('joke'));
    }
}

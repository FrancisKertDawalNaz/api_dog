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
}

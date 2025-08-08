@extends('layouts.main')

@section('title', 'Random Dog')

@section('content')
    <div class="text-center">
        <h1 class="text-primary mb-4">Random Dog 🐶</h1>

        @if (!empty($dogImage))
            <img src="{{ $dogImage }}" alt="Dog Image" class="img-fluid rounded shadow" style="max-width: 400px;">
        @else
            <p class="text-danger">Failed to fetch dog image.</p>
        @endif

        <form method="GET" action="/dog" class="mt-4">
            <button class="btn btn-outline-primary">Show Another Dog</button>
        </form>
    </div>
@endsection

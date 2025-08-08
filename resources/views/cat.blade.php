@extends('layouts.main')

@section('title', 'Random Cat')

@section('content')
<div class="container text-center mt-5">
    <h1 class="text-success fw-bold mb-4">Random Cat 🐱</h1>

    @if ($catImage)
        <img src="{{ $catImage }}" alt="Cat Image" class="img-fluid rounded shadow" style="max-width: 400px;">
    @else
        <p class="text-danger">Failed to fetch cat image.</p>
    @endif

    <form method="GET" action="/cat" class="mt-4">
        <button class="btn btn-outline-success">Show Another Cat</button>
    </form>
</div>
@endsection

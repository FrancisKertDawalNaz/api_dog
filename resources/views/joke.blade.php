@extends('layouts.main')

@section('title', 'Random Joke')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h2 class="text-warning fw-bold mb-4">😂 Random Joke</h2>

                    @if ($joke)
                        <p class="fs-5"><strong>Setup:</strong> {{ $joke['setup'] }}</p>
                        <p class="fs-5"><strong>Punchline:</strong> {{ $joke['punchline'] }}</p>
                    @else
                        <div class="alert alert-danger">Failed to fetch a joke.</div>
                    @endif

                    <form method="GET" action="/joke" class="mt-4">
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-redo-alt me-1"></i> Tell Me Another!
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.main')

@section('title', 'Random Dog')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h2 class="card-title text-primary mb-4">🐶 Random Dog</h2>

                    @if (!empty($dogImage))
                        <img src="{{ $dogImage }}" alt="Dog Image" class="img-fluid rounded mb-3 shadow-sm" style="max-height: 350px;">
                    @else
                        <div class="alert alert-danger">Failed to fetch dog image.</div>
                    @endif

                    <form method="GET" action="/dog">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sync-alt me-1"></i> Show Another Dog
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

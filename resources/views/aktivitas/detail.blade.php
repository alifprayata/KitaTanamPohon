@extends('layouts.main')

@section('container')
<div class="container mt-4 mb-4">
    <h1 class="text-center mb-4">{{ $title }}</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            @if(isset($organization->logo))
                <img src="{{ $organization->logo }}" alt="Logo" class="mb-3" style="width: 100px; height: 100px;">
            @endif

            <h3 class="card-title fw-bold">{{ $organization->name }}</h3>
            <p class="card-text">{{ $organization->description }}</p>

            <div class="mt-4">
                <p><strong>Location:</strong> {{ $organization->location }}</p>
                <p><strong>Focus Areas:</strong> {{ $organization->focus_area }}</p>
                <p><strong>Contact:</strong> {{ $organization->contact }}</p>
            </div>

            <!-- Back to Main Menu Button -->
            <div class="mt-4 text-center">
                <a href="{{ route('home') }}" class="btn btn-secondary">Back to Main Menu</a>
            </div>
        </div>
    </div>
</div>
@endsection

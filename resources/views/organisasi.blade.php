@extends('layouts.main')  {{-- Make sure this matches your layout file name --}}

@section('container')
<div class="container mt-4">
    <h1 class="text-center mb-4">{{ $title }}</h1>
    @if($organizations->isEmpty())
        <p class="text-center">No organizations found.</p>
    @else
        <div class="row">
            @foreach($organizations as $organization)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('organisasi.show', $organization->id) }}" class="card-link text-decoration-none">
                        <div class="card shadow-sm rounded">
                            <div class="card-body">
                                @if(isset($organization->logo))
                                    <img src="{{ $organization->logo }}" alt="Logo" class="mb-3" style="width: 50px; height: 50px;">
                                @endif

                                <h5 class="card-title fw-bold">{{ $organization->name }}</h5>
                                <p class="card-subtitle text-muted mb-2">{{ $organization->location }}</p>

                                <div class="mb-3">
                                    @foreach(explode(',', $organization->focus_area) as $focus)
                                        @if(trim($focus) == 'Environment')
                                            <span class="badge badge-environment">{{ trim($focus) }}</span>
                                        @else
                                            <span class="badge bg-secondary">{{ trim($focus) }}</span>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="d-flex justify-content-between">
                                    <small>
                                        <i class="bi bi-fire"></i> {{ $organization->activities_count ?? 0 }} Aktivitas
                                    </small>
                                    <small>
                                        <i class="bi bi-people"></i> {{ $organization->volunteers_count ?? 0 }} Relawan
                                    </small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Modified pagination section --}}
        <div class="d-flex justify-content-center pagination page-item">
            {{ $organizations->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>
@endsection

{{-- Add this section if you're using Bootstrap 5 --}}
@push('styles')
<style>
    .pagination {
        margin-top: 20px;
    }
    .page-item.active .page-link {
        background-color: #28a745;  /* Changed to green */
        border-color: #28a745;     /* Changed to green */
        color: #ffffff;
    }
    .page-link {
        color: #28a745;            /* Changed to green */
    }
    .page-link:hover {
        background-color: #28a745; /* Changed to green */
        border-color: #218838;     /* Darker green for border */
        color: #ffffff;
    }
    .page-link:focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); /* Green shadow */
    }
</style>
@endpush
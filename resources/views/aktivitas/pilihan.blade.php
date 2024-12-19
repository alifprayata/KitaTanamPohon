@extends('layouts.main')

@section('container')
<style>
/* Change active page button to green */
.page-item.active .page-link {
    background-color: #28a745;
    border-color: #28a745;
    color: white;
}

.page-link {
    color: #28a745;
    background-color: white;
    border: 1px solid #dee2e6;
}

.page-link:hover {
    background-color: #28a745;
    color: white;
    border-color: #28a745;
}
.wrappers nav div:nth-child(2){
    flex-direction:column-reverse;
   
}
</style>

<!-- Search Bar -->
<div class="row mb-3">
    <div class="col-12">
        <form action="{{ route('pilihan.index') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari Aktivitas..."
                    value="{{ request('search') }}">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<!-- Card Layout -->
<div class="row">
    @forelse($activities as $activity)
    <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm">
            <a href="{{ route('aktivitas.show', $activity->id) }}" class="text-decoration-none text-dark">
            <div class="card-body">
                
                <span class="badge bg-success">{{ $activity->category }}</span>
                <h5 class="card-title mt-2">{{ $activity->title }}</h5>
                <p class="card-text">{{ Str::limit($activity->description, 50) }}</p>
                <small class="text-muted">
                    <i class="bi bi-calendar"></i> {{ $activity->date }}
                    <br>
                    <i class="bi bi-geo-alt"></i> {{ $activity->location }}
                </small>
            </div>
            </a>
        </div>

    </div>
    @empty
    <div class="col-12 text-center">
        <h5>No activities found for "{{ request('search') }}"</h5>
    </div>
    @endforelse
</div>

<!-- Pagination -->
<div class="d-flex flex-column align-items-center mt-4 wrappers">
    {{ $activities->appends(['search' => request('search')])->links('pagination::bootstrap-5') }}
</div>
@endsection

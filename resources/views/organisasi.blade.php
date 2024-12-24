<!-- Correct CSS Styling -->
<style>
/* Environment Badge Styling */
.badge-environment {
    background-color: #28a745; /* Green shade */
    color: #ffffff; /* White text */
    font-weight: bold;
    border-radius: 5px; /* Rounded edges */
    padding: 5px 10px;
}

/* Card Styling */
.card {
    border: none;
    border-radius: 10px;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
    text-decoration: none; /* Remove underline from anchor */
    color: inherit; /* Inherit text color */
}

.card:hover {
    transform: scale(1.03);
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

/* General Badge Styling */
.badge {
    margin-right: 5px;
    font-size: 0.9rem;
}

/* Pagination Styling */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.pagination .page-item {
    margin: 0 5px;
}

.pagination .page-link {
    border: 1px solid #dee2e6;
    padding: 8px 12px;
    border-radius: 5px;
    color: #007bff;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
}

.pagination .page-link:hover {
    background-color: #007bff;
    color: #ffffff;
    text-decoration: none;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    color: #ffffff;
    border: none;
}

.pagination .page-link:focus {
    box-shadow: none;
    outline: none;
}
</style>

@section('container')
<div class="container mt-4">
    <h1 class="text-center mb-4">{{ $title }}</h1>
    @if($organizations->isEmpty())
        <p class="text-center">No organizations found.</p>
    @else
        <div class="row">
            @foreach($organizations as $organization)
                <div class="col-md-4 mb-4">
                    <!-- Wrap card in anchor tag to make it clickable -->
                    <a href="{{ route('organisasi.show', $organization->id) }}" class="card-link text-decoration-none">
                        <div class="card shadow-sm rounded">
                            <div class="card-body">
                                <!-- Dynamic Logo Placeholder -->
                                @if(isset($organization->logo))
                                    <img src="{{ $organization->logo }}" alt="Logo" class="mb-3" style="width: 50px; height: 50px;">
                                @endif

                                <!-- Organization Name -->
                                <h5 class="card-title fw-bold">{{ $organization->name }}</h5>

                                <!-- Location -->
                                <p class="card-subtitle text-muted mb-2">{{ $organization->location }}</p>

                                <!-- Focus Area Badges -->
                                <div class="mb-3">
                                    @foreach(explode(',', $organization->focus_area) as $focus)
                                        @if(trim($focus) == 'Environment')
                                            <span class="badge badge-environment">{{ trim($focus) }}</span>
                                        @else
                                            <span class="badge bg-secondary">{{ trim($focus) }}</span>
                                        @endif
                                    @endforeach
                                </div>

                                <!-- Activities & Volunteers Info -->
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

        <!-- Pagination -->
        @if(isset($organizations) && method_exists($organizations, 'links'))
            <div class="pagination mt-4">
                {{ $organizations->links() }}
            </div>
        @endif
    @endif
</div>
@endsection

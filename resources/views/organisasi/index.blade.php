@extends('layouts.main')

@section('title', 'Cari Organisasi') 

@section('container')
<div class="container mt-4">
    <div class="row align-items-start">
        <div class="col-4">
            <div class="filter-section">
                <div class="filter-box">
                    <form action="{{ route('organizations.index') }}" method="GET">
                        <label for="search">Cari organisasi</label>
                        <input type="text" name="search" id="search" placeholder="Pencarian..." value="{{ request('search') }}">
                        <button type="submit" class="search-button">Cari</button>
                    </form>
                </div>
                <div class="filter-options">
                </div>
            </div>
        </div>
        <div class="col">
            <div id="organization-list">
            @foreach($organizations as $organization)
    <div class="organization-card">
        <h3>{{ $organization->name }}</h3>
        <p>{{ $organization->description }}</p>
        <p>Location: {{ $organization->location }}</p>
        <p>Focus Area: {{ $organization->focus_area }}</p>
    </div>
@endforeach

            </div>
        </div>
    </div>
</div>
@endsection


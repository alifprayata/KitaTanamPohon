@extends('layouts.main')

@section('container')
@if($organizations->isEmpty())
        <h1>No Such Artile with search: {{ $search }}</h1>
    @else
    @foreach ($organizations as $organization)
    <div>
        <div>
            <img src="{{ $organization->logo_url }}" alt="" height="30px" width="70px">
        </div>
        <div>
            <div>{{ $organization->name }}</div>
            <div>{{ $organization->description }}</div>
            <div>{{ $organization->location }}</div>
            <div>{{ $organization->focus_area }}</div>
            <div>{{ $organization->organization_type }}</div>
        </div>

    </div>

    @endforeach
    @endif
@endsection
@extends('layouts.main')

@section('container')
    <body>
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-8 mb-4">
                    <h2 class="mb-4">Yuk jadi tim <span class="text-primary">{{ $activity->title }}</span></h2>
                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('images/' . $activity->image) }}" alt="{{ $activity->title }}" class="img-fluid rounded" style="max-width: 150px; margin-right: 20px;">
                        <h3 class="fw-bold">We Need You!</h3>
                    </div>
                    <p class="text-muted fs-5 mb-3">{{ $activity->short_description }}</p>
                    <p class="text-muted fs-5">{{ $activity->description }}</p>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-header text-white text-center" style="background-color: #6B8E23;">
                            <h5 class="mb-0">{{ $activity->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="fw-bold">Jadwal Event</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-calendar-event"></i> {{ $activity->event_date }}</li>
                                <li><i class="bi bi-clock"></i> {{ $activity->time }}</li>
                                <li><i class="bi bi-geo-alt"></i> Venue: {{ $activity->location }}</li>
                            </ul>
                            <p class="text-danger fw-bold">Batas Registrasi: {{ $activity->registration_deadline }}</p>
                            <div class="d-grid gap-2">
                                <a href="{{ $activity->join_url }}" class="btn btn-warning btn-lg">Join Us!</a>
                                <a href="{{ $activity->contact_url }}" class="btn btn-success btn-lg">Kontak Organisasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

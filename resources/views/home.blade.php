@extends('layouts.main')

@section('container')
<style>
    .hero-background {
        position: relative;
        background: url('/img/bg.jpg') no-repeat center center;
        background-size: cover;
        color: white;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); 
        border-radius: 12px;
    }
    .hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
    }
    .btn-hero {
        background-color: #6B8E23;
        color: white;
        font-weight: bold;
        border: none;
    }
    .card-custom {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-icon {
        font-size: 40px;
        color: #6B8E23;
    }
    .card-btn {
        background-color: #6B8E23;
        color: white;
        border: none;
        font-weight: bold;
    }
    .activity-section {
        text-align: center;
        margin-top: 20px;
    }
    .activity-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .activity-subtitle {
        font-size: 16px;
        color: #6B8E23;
        margin-bottom: 30px;
    }
    .activity-card {
        position: relative;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .activity-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .badge-container {
        position: absolute;
        top: 10px;
        left: 10px;
        display: flex;
        gap: 5px;
        flex-wrap: wrap;
    }
    .badge {
        background-color: #D2B48C;
        color: white;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 4px;
    }
    .activity-info {
        padding: 15px;
    }
    .activity-title-card {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 0;
    }
    .activity-details {
        font-size: 14px;
        color: #6B8E23;
    }
    .card-footer {
        padding: 15px;
        text-align: center;
    }
    .btn-view-more {
        background-color: #6B8E23;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
    }
</style>
<div class="hero-background">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Ambil Peran Jadi Relawan</h1>
        <p>Ubah niat baik jadi aksi baik hari ini</p>
        <a class="btn btn-hero mt-3" href="/aktivitas">Cari Aktivitas</a>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="hero-section text-center" style="background-color: #6B8E23; color: white; border-radius: 12px; padding: 20px;">
                <h2>Website #1 untuk mencari relawan dan aksi sosial</h2>
                <p>Lebih banyak relawan, lebih besar dampaknya. Ada beragam pilihan aktivitas yang dapat diikuti untuk membuat perubahan besar.</p>
                <button class="btn btn-hero mt-3">Cari Aktivitas</button>
            </div>
        </div>
        
        <div class="col-md-8">
            <h4 class="mb-4">Kenali Layanan TanamRelawan</h4>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-custom text-center p-3">
                        <div class="card-body">
                            <div class="card-icon mb-3">
                                <i class="bi bi-heart"></i>
                            </div>
                            <h5 class="card-title">Jadi Relawan</h5>
                            <p class="card-text">Baru memulai untuk jadi relawan? Pelajari selengkapnya dan mulai cari aktivitas kerelawanan pertama kamu!</p>
                            <button class="btn card-btn mt-3">Cari Aktivitas</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom text-center p-3">
                        <div class="card-body">
                            <div class="card-icon mb-3">
                                <i class="bi bi-people"></i>
                            </div>
                            <h5 class="card-title">Cari Relawan</h5>
                            <p class="card-text">Butuh bantuan relawan untuk komunitasmu? Pelajari selengkapnya dan temukan relawan yang tepat!</p>
                            <button class="btn card-btn mt-3">Lihat Panduan</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom text-center p-3">
                        <div class="card-body">
                            <div class="card-icon mb-3">
                                <i class="bi bi-handshake"></i>
                            </div>
                            <h5 class="card-title">Kerjasama CSR</h5>
                            <p class="card-text">Tingkatkan dampak program CSR perusahaan bersama kami dengan melibatkan komunitas lokal dan relawan!</p>
                            <button class="btn card-btn mt-3">Pelajari Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="activity-section">
    <h2 class="activity-title">48 Aktivitas Butuh Bantuan Kamu</h2>
    <p class="activity-subtitle">Pilih aktivitas kerelawanan sesuai minat, lokasi, dan isu yang kamu sukai</p>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card activity-card">
                    <img src="/img/event1.jpg" alt="Event Image">
                    <div class="badge-container">
                        <span class="badge">Event</span>
                        <span class="badge">Penanggulangan Bencana</span>
                    </div>
                    <div class="activity-info">
                        <h5 class="activity-title-card">Humanitrip Spesial Hari Ayah</h5>
                        <p class="activity-details">Human Initiative Volunteer Energy (HIVE)</p>
                        <p class="activity-details"><i class="bi bi-calendar"></i> 30 November 2024</p>
                        <p class="activity-details"><i class="bi bi-geo-alt"></i> Kota Depok</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card activity-card">
                    <img src="/img/event2.jpg" alt="Event Image">
                    <div class="badge-container">
                        <span class="badge">Event</span>
                        <span class="badge">Pengembangan Masyarakat</span>
                    </div>
                    <div class="activity-info">
                        <h5 class="activity-title-card">Membalik Halaman #82</h5>
                        <p class="activity-details">Book Clan</p>
                        <p class="activity-details"><i class="bi bi-calendar"></i> 16 November 2024</p>
                        <p class="activity-details"><i class="bi bi-geo-alt"></i> Kota Administrasi Jakarta Pusat</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card activity-card">
                    <img src="/img/event3.png" alt="Event Image">
                    <div class="badge-container">
                        <span class="badge">Event</span>
                        <span class="badge">Pendidikan</span>
                        <span class="badge">Pengembangan</span>
                    </div>
                    <div class="activity-info">
                        <h5 class="activity-title-card">#Calling for Peserta KataKotaKita</h5>
                        <p class="activity-details">Gerakan Genius</p>
                        <p class="activity-details"><i class="bi bi-calendar"></i> 15 November 2024</p>
                        <p class="activity-details"><i class="bi bi-geo-alt"></i> Kota Administrasi Jakarta Selatan</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card activity-card">
                    <img src="/img/event4.jpg" alt="Event Image">
                    <div class="badge-container">
                        <span class="badge">Event</span>
                        <span class="badge">Pengembangan Anak Muda</span>
                    </div>
                    <div class="activity-info">
                        <h5 class="activity-title-card">Open Volunteer Sekolah Moderasi Yogyakarta</h5>
                        <p class="activity-details">Global Peace Foundation Indonesia</p>
                        <p class="activity-details"><i class="bi bi-calendar"></i> 16 November 2024</p>
                        <p class="activity-details"><i class="bi bi-geo-alt"></i> Kabupaten Bantul</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card-footer">
        <a class="btn btn-view-more" href="/aktivitas">Lihat Aktivitas Lain</a>
    </div>
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@endsection

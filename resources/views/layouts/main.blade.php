<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        body, .navbar, .dropdown-menu {
            font-family: 'Merriweather', serif;
            font-size: 1.1rem; 
        }
        .navbar {
            background-color: #6B8E23; 
        }
        .navbar-brand {
            font-weight: 900; 
            font-size: 1.5rem; 
            color: white;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 2rem;
            color: #333;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #ddd;
        }
        .footer-branding h2 {
            font-family: 'Roboto', sans-serif;
            color: #6B8E23;
        }
        .footer-branding .brand-highlight {
            font-weight: bold;
        }
        .footer-branding p {
            margin: 0.5rem 0;
        }
        .contact-info {
            font-size: 0.9rem;
        }
        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .footer-links a {
            text-decoration: none;
            color: #333;
            font-size: 0.9rem;
        }
        .footer-support {
            text-align: center;
        }
        .footer-support img {
            width: 150px;
            margin-top: 0.5rem;
        }
        .footer-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding-top: 1rem;
        }
        .footer-social a {
            color: #333;
            font-size: 1.5rem;
        }
        .footer-social a:hover {
            color: #d32f2f;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg nav-underline nav-tabs sticky-top">
  <div class="container d-inline-flex gap-2">
    <a class="navbar-brand" href="/">TanamPohon.id</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/pilihan">Cari Aktivitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/organisasi">Cari Organisasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang Kami</a>
        </li>
      </ul>
      <div class="ms-auto">
        @auth
            <li class="nav-item dropdown">
                <button class="btn dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : '/img/defaultpic.jpg' }}" 
                          alt="Profile Picture" 
                          class="rounded-circle" 
                          style="width: 32px; height: 32px;">
                    {{ auth()->user()->username }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @else
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login / Sign Up
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="/login">Login</a></li>
            <li><a class="dropdown-item" href="/register">Sign Up</a></li>
          </ul>
        </div>
        @endauth
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
    @yield('container')
</div>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-branding">
            <h2><span class="brand-highlight">TanamPohon</span>.id</h2>
            <p>TanamPohon adalah wadah online untuk memfasilitasi kegiatan penanaman pohon dan lingkungan hidup.</p>
            <p><em>Ubah niat baik jadi aksi baik hari ini.</em></p>
            <p class="contact-info">
                <strong>Volunteer Hub Jakarta</strong><br>
                Jl.Panglima Polim V No. 60<br>
                Jakarta Selatan 12160<br>
                <a href="tel:+62811977140">+62 811 9777 140</a>
            </p>
        </div>
        <div class="footer-links">
            <a href="#">Tentang Kami</a>
            <a href="#">Donasi Sekarang</a>
            <a href="#">Karir</a>
            <a href="#">Kontak Kami</a>
            <a href="#">Kerjasama CSR</a>
            <a href="#">Liputan Media</a>
            <a href="#">Blog</a>
            <a href="#">Donatur</a>
        </div>
        <div class="footer-support">
            <p>Didukung oleh:</p>
            <img src="/path/to/biznet-giocloud-logo.png" alt="Biznet GioCloud">
        </div>
    </div>
    <div class="footer-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-whatsapp"></i></a>
        <a href="#"><i class="fa fa-tiktok"></i></a>
    </div>

    @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('loginError'))
<div class="alert alert-danger">
    {{ session('loginError') }}
</div>
@endif



</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

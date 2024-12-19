@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto">
          <form action="/login" method="POST"> {{-- Add action and method --}}
            @csrf {{-- CSRF token for security --}}
            <img class="mb-4" src="/img/logo.jpg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please login</h1>
        
            <div class="form-floating">
              <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
              <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-color w-100 py-2" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-3">Belum daftar?
            <a href="/register">Daftar Sekarang!</a>
          </small>
          <link rel="stylesheet" href="/css/style.css">
        </main>
    </div>
</div>
@endsection

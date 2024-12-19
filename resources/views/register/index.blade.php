@extends('layouts.main')

@section('container')
<style>
  .form-floating {
    color: grey;
  }
</style>
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
          <form action="/register" method="post">
            @csrf
            <img class="mb-4" src="/img/logo.jpg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Form Registrasi</h1>
        
            <div class="form-floating">
              <input type="name" name="name" class="form-control @error('name') is invalid @enderror" id="name" placeholder="Name" required>
              <label for="name">Name</label>
              @error('name')<div class="invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-floating">
              <input type="username" name="username" class="form-control @error('username') is invalid @enderror" id="username" placeholder="Username"required>
              <label for="username">username</label>
              @error('username')<div class="invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email) is invalid @enderror" id="email" placeholder="name@example.com" required>
              <label for="Email">email</label>
              @error('email')<div class="invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-floating mb-3">
            <input type="file" name="profile_picture" class="form-control" id="profile_picture" placeholder="Upload Profile Picture">
            <label for="profile_picture">Upload Profile Picture</label>
            </div>  
            <div class="form-floating">
              <input type="password" name="password" class="form-control @error('password') is invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')<div class="invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <button class="btn btn-color w-100 py-2 mt-3" type="submit">Register</button>
          </form>
          <small class="d-block text-center mt-3">Sudah daftar?
            <a href="/login">Login</a>
          </small>
          <link rel="stylesheet" href="/css/style.css">
        </main>
    </div>
</div>
@endsection
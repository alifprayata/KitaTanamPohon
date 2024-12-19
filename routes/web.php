<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\Pilihan;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

// Authentication Routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authentication']);   
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Organization Routes
Route::get('/organisasi', [OrganizationController::class, 'index'])->name('organisasi.index');
Route::get('/search', [OrganizationController::class, 'handleSearch'])->name('organisasi.search');

// About Page
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

// Activity Routes
Route::get('/aktivitas/{id}', [Pilihan::class, 'show'])->name('aktivitas.show');
Route::get('/pilihan', [Pilihan::class, 'index'])->name('pilihan.index');
Route::get('/organisasi/{id}', [OrganizationController::class, 'show'])->name('organisasi.show');
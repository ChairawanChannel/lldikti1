<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MasyarakatController; // Menambahkan controller masyarakat
use Illuminate\Support\Facades\Route;

// Route untuk halaman login
Route::get('/', function () {
    return view('/auth/login');
});

// Route untuk dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group route dengan middleware auth
Route::middleware('auth')->group(function () {
    // Route untuk profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route CRUD masyarakat
    Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat.index');
    Route::get('/masyarakat/create', [MasyarakatController::class, 'create'])->name('masyarakat.create');
    Route::post('/masyarakat', [MasyarakatController::class, 'store'])->name('masyarakat.store');
    Route::get('/masyarakat/{id}/edit', [MasyarakatController::class, 'edit'])->name('masyarakat.edit');
    Route::put('/masyarakat/{id}', [MasyarakatController::class, 'update'])->name('masyarakat.update');
    Route::delete('/masyarakat/{id}', [MasyarakatController::class, 'destroy'])->name('masyarakat.destroy');
});

// Include routes untuk authentication
require __DIR__ . '/auth.php';

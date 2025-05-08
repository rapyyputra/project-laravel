<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect root ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// Dashboard hanya bisa diakses jika sudah login & verifikasi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Semua route di bawah ini hanya bisa diakses oleh user yang sudah login
Route::middleware(['auth'])->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD Mahasiswa (tanpa slash di depan!)
    Route::resource('mahasiswa', MahasiswaController::class);

    // Export Mahasiswa
    Route::get('mahasiswa/export', [MahasiswaController::class, 'export'])->name('mahasiswa.export');
});

// Route bawaan untuk autentikasi
require __DIR__ . '/auth.php';

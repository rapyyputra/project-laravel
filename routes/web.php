<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FRSController;
use App\Http\Controllers\FRSApprovalController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NilaiController;

// 🔁 Redirect root ke dashboard sesuai role jika sudah login
Route::get('/', function () {
    if (Auth::check()) {
        $userRole = Auth::user()->role ?? 'default';
        return match ($userRole) {
            'mahasiswa' => redirect()->route('dashboard.mahasiswa'),
            'dosen'     => redirect()->route('dashboard.dosen'),
            default     => redirect()->route('dashboard.default'),
        };
    }
    return redirect()->route('login');
});

Route::get('/dashboard/default', fn () => view('dashboard.default'))->name('dashboard.default');

// 🛡️ Semua route yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {

    // 🧑‍🎓 Route khusus Mahasiswa
    Route::middleware(['role:mahasiswa'])->group(function () {
        Route::get('/dashboard/mahasiswa', fn () => view('dashboard.mahasiswa'))->name('dashboard.mahasiswa');
        Route::get('/frs', [FRSController::class, 'index'])->name('frs.index');
        Route::get('/jadwal-mahasiswa', [JadwalController::class, 'mahasiswa'])->name('jadwal.mahasiswa');
        Route::get('/nilai-mahasiswa', [NilaiController::class, 'mahasiswa'])->name('nilai.mahasiswa');

        Route::resource('biodata', MahasiswaController::class);
        Route::get('biodata/export', [MahasiswaController::class, 'export'])->name('biodata.export');
    });

    // 🧑‍🏫 Route khusus Dosen
    Route::middleware(['role:dosen'])->group(function () {
        Route::get('/dashboard/dosen', fn () => view('dashboard.dosen'))->name('dashboard.dosen');
        Route::get('/frs-acc', [FRSApprovalController::class, 'index'])->name('frs.acc');
        Route::get('/jadwal-dosen', [JadwalController::class, 'dosen'])->name('jadwal.dosen');
        Route::get('/nilai-input', [NilaiController::class, 'input'])->name('nilai.input');
    });

    // 👤 Profile untuk semua user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 🔐 Autentikasi Breeze/Fortify
require __DIR__.'/auth.php';

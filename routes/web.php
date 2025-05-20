<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FRSController;
use App\Http\Controllers\FRSApprovalController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NilaiController;

// 🔁 Route default: redirect sesuai role jika sudah login
Route::get('/', function () {
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->role === 'mahasiswa') {
            return redirect()->route('dashboard.mahasiswa');
        } elseif ($user->role === 'dosen') {
            return redirect()->route('dashboard.dosen');
        }
        // Fallback kalau role tidak dikenali
        Auth::logout();
        return redirect()->route('login')->withErrors(['email' => 'Role tidak dikenali.']);
    }

    // Jika belum login, arahkan ke login
    return redirect()->route('login');
});

// Semua route yang butuh autentikasi
Route::middleware(['auth'])->group(function () {

    // Route Dashboard per Role
    Route::get('/dashboard/mahasiswa', function () {
        if (Auth::user()->role !== 'mahasiswa') {
            abort(403, 'Akses hanya untuk mahasiswa.');
        }
        return view('dashboard.mahasiswa');
    })->name('dashboard.mahasiswa');

    Route::get('/dashboard/dosen', function () {
        if (Auth::user()->role !== 'dosen') {
            abort(403, 'Akses hanya untuk dosen.');
        }
        return view('dashboard.dosen');
    })->name('dashboard.dosen');

    // Profile User
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Biodata (mahasiswa)
    Route::resource('biodata', MahasiswaController::class);
    Route::get('biodata/export', [MahasiswaController::class, 'export'])->name('biodata.export');

    // Mahasiswa Fitur
    Route::get('/frs', [FRSController::class, 'index'])->name('frs.index');
    Route::get('/jadwal-mahasiswa', [JadwalController::class, 'mahasiswa'])->name('jadwal.mahasiswa');
    Route::get('/nilai-mahasiswa', [NilaiController::class, 'mahasiswa'])->name('nilai.mahasiswa');

    // Dosen Fitur
    Route::get('/frs-acc', [FRSApprovalController::class, 'index'])->name('frs.acc');
    Route::get('/jadwal-dosen', [JadwalController::class, 'dosen'])->name('jadwal.dosen');
    Route::get('/nilai-input', [NilaiController::class, 'input'])->name('nilai.input');
});

require __DIR__ . '/auth.php';
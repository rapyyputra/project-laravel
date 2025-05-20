<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function mahasiswa()
    {
        // Pastikan hanya mahasiswa yang bisa akses
        if (Auth::user()->role !== 'mahasiswa') {
            abort(403, 'Akses hanya untuk mahasiswa.');
        }
        // Sesuaikan dengan: resources/views/mahasiswa/jadwal.blade.php
        return view('mahasiswa.jadwal');
    }

    public function dosen()
    {
        // Pastikan hanya dosen yang bisa akses
        if (Auth::user()->role !== 'dosen') {
            abort(403, 'Akses hanya untuk dosen.');
        }
        // Sesuaikan dengan: resources/views/dosen/jadwal.blade.php
        return view('dosen.jadwal');
    }
}
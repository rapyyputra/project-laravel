<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function mahasiswa()
    {
        // Pastikan hanya mahasiswa yang bisa akses
        if (Auth::user()->role !== 'mahasiswa') {
            abort(403, 'Akses hanya untuk mahasiswa.');
        }
        // Sesuaikan dengan: resources/views/mahasiswa/nilai.blade.php
        return view('mahasiswa.nilai');
    }

    public function input()
    {
        // Pastikan hanya dosen yang bisa akses
        if (Auth::user()->role !== 'dosen') {
            abort(403, 'Akses hanya untuk dosen.');
        }
        // Sesuaikan dengan: resources/views/dosen/nilai.blade.php
        return view('dosen.nilai');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FRSController extends Controller
{
    public function __construct()
    {
        // Pastikan hanya mahasiswa yang bisa akses
        $this->middleware(function ($request, $next) {
            if (Auth::user()->role !== 'mahasiswa') {
                abort(403, 'Akses hanya untuk mahasiswa.');
            }
            return $next($request);
        });
    }

    public function index()
    {
        // Sesuaikan dengan: resources/views/mahasiswa/frs.blade.php
        return view('mahasiswa.frs');
    }
}
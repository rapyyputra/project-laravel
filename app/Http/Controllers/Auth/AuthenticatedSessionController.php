<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Tampilkan halaman login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Tangani proses login.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Autentikasi user dari form login (email & password)
        $request->authenticate();

        // Amankan session
        $request->session()->regenerate();

        // Ambil user yang baru login
        $user = Auth::user();

        // Redirect berdasarkan role
        if ($user && $user->role === 'mahasiswa') {
            return redirect()->route('dashboard.mahasiswa');
        } elseif ($user && $user->role === 'dosen') {
            return redirect()->route('dashboard.dosen');
        }

        // Jika role tidak valid atau tidak ada
        Auth::logout();
        return redirect()->route('login')->withErrors([
            'email' => 'Role tidak dikenali atau belum diatur.',
        ]);
    }

    /**
     * Logout user dari sesi.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

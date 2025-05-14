<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
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
     * Tangani request login masuk.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Melakukan autentikasi dari LoginRequest (yang sudah validasi email & password)
        $request->authenticate();

        // Regenerasi session agar aman
        $request->session()->regenerate();

        // Redirect ke halaman setelah login (default: /dashboard)
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Logout pengguna dari sesi yang terautentikasi.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Logout user dari guard default (web)
        Auth::guard('web')->logout();

        // Invalidasi sesi & token agar aman
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau beranda
        return redirect('/');
    }
}

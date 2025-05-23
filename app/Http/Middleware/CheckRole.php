<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['message' => 'Silakan login terlebih dahulu.']);
        }

        // Pastikan role ada dan sesuai (case-insensitive untuk keamanan)
        $userRole = strtolower(Auth::user()->role ?? '');
        if ($userRole !== strtolower($role)) {
            return redirect()->route('dashboard.default')->withErrors(['message' => 'Akses ditolak. Anda tidak memiliki izin untuk halaman ini.']);
        }

        return $next($request);
    }
}
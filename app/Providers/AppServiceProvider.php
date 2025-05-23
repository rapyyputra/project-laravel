<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function redirectTo()
{
    $role = auth()->user()->role;

    switch ($role) {
        case 'dosen':
            return '/dashboard/dosen';
        case 'mahasiswa':
            return '/dashboard/mahasiswa';
        default:
            return '/dashboard';
    }
}


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

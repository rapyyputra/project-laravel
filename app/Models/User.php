<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Atribut yang bisa di-*mass assign*.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // ✅ Tambahkan ini!
    ];

    /**
     * Atribut yang disembunyikan saat serialisasi.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Atribut yang perlu dicasting.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

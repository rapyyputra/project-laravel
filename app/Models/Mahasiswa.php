<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'mahasiswa';

    // Kolom yang bisa diisi
    protected $fillable = [
        'user_id',
        'nrp',
        'nama',
        'program_studi_id',
        'angkatan',
    ];

    /**
     * Relasi ke tabel users (setiap mahasiswa dimiliki oleh satu user)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi ke tabel program_studi
     */
    public function programStudi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id');
    }

    /**
     * Relasi ke tabel frs (Form Rencana Studi)
     */
    public function frs(): HasMany
    {
        return $this->hasMany(FRS::class, 'mahasiswa_id');
    }

    /**
     * Relasi ke tabel nilai
     */
    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class, 'mahasiswa_id');
    }
}

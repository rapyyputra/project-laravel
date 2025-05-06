<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramStudi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'program_studi';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
        'fakultas'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'kode_prodi' => 'string'
    ];

    /**
     * Get all mahasiswa for the program studi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mahasiswa(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'program_studi_id');
    }

    /**
     * Get all mata kuliah for the program studi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mataKuliah(): HasMany
    {
        return $this->hasMany(MataKuliah::class, 'program_studi_id');
    }
}
<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MahasiswaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Mahasiswa::with('programStudi')
            ->get()
            ->map(function ($mhs) {
                return [
                    'NRP' => $mhs->nrp,
                    'Nama' => $mhs->nama,
                    'Program Studi' => $mhs->programStudi->nama ?? '-',
                    'Angkatan' => $mhs->angkatan,
                ];
            });
    }

    public function headings(): array
    {
        return ['NRP', 'Nama', 'Program Studi', 'Angkatan'];
    }
}

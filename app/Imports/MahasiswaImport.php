<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    public function model(array $row)
    {
        return new Mahasiswa([
            'nrp' => $row[0],
            'nama' => $row[1],
            'program_studi_id' => $row[2],
            'angkatan' => $row[3],
        ]);
    }
}

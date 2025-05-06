// database/migrations/2025_04_30_000007_create_nilai_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliah');
            $table->foreignId('dosen_id')->constrained('dosen');
            $table->float('nilai_akhir');
            $table->float('grade_point');
            $table->enum('huruf_mutu', ['A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'E']);
            $table->string('tahun_akademik', 9);
            $table->enum('semester', ['Ganjil', 'Genap']);
            $table->boolean('is_remidi')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilai');
    }
};
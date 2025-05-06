// database/migrations/2025_04_30_000006_create_frs_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('frs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliah');
            $table->string('tahun_akademik', 9);
            $table->enum('semester', ['Ganjil', 'Genap']);
            $table->enum('status_persetujuan', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('frs');
    }
};
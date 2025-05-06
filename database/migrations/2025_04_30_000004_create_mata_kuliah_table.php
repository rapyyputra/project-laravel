// database/migrations/2025_04_30_000004_create_mata_kuliah_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk', 10)->unique();
            $table->string('nama_mk', 100);
            $table->integer('sks');
            $table->enum('semester', ['1', '2', '3', '4', '5', '6', '7', '8']);
            $table->foreignId('program_studi_id')->constrained('program_studi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
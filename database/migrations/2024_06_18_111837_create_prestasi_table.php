<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_prestasi');
            $table->string('slug');
            $table->foreignId('jenisprestasi_id')->constrained('jenisprestasi')->cascadeOnDelete();
            $table->foreignId('tingkatprestasi_id')->constrained('tingkatprestasi')->cascadeOnDelete();
            $table->string('tahun');
            $table->string('gambar');
            $table->longText('detail_prestasi');
            $table->enum('kategori', ['Siswa', 'Guru', 'Sekolah']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};

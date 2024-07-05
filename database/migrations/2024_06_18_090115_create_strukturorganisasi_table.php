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
        Schema::create('strukturorganisasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul_struktur');
            $table->text('deskripsi_struktur')->nullable();
            $table->string('gambar_struktur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strukturorganisasi');
    }
};

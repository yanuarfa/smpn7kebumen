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
        Schema::create('menulainnya', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->string('link_menu');
            $table->timestamps();
        });

        Schema::create('saranaprasarana', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('file_gambar');
            $table->longText('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('sastra', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengguna');
            $table->string('sosial_media');
            $table->string('judul');
            $table->string('file_karya');
            $table->longText('deskripsi_karya')->nullable();
            $table->timestamps();
        });

        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->longText('deskripsi_foto')->nullable();
            $table->timestamps();
        });

        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('angkatan');
            $table->string('pekerjaan');
            $table->string('foto');
            $table->longText('pesan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menulainnya');
        Schema::dropIfExists('saranaprasarana');
        Schema::dropIfExists('sastra');
        Schema::dropIfExists('galeri');
        Schema::dropIfExists('alumni');
    }
};

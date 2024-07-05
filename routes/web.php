<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PendidikanController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('profil-sekolah', [AboutController::class, 'profilsekolah'])->name('profil-sekolah');
Route::get('visi-misi', [AboutController::class, 'visimisi'])->name('visi-misi');
Route::get('struktur-organisasi', [AboutController::class, 'strukturorganisasi'])->name('struktur-organisasi');
Route::get('pengajar', [AboutController::class, 'pengajar'])->name('pengajar');
Route::get('sarana-prasarana', [AboutController::class, 'saranaprasarana'])->name('sarana-prasarana');

Route::get('berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('berita/{slug}', [BeritaController::class, 'detailberita'])->name('detail-berita');

Route::get('alumni', [HomeController::class, 'alumni'])->name('alumni');
Route::post('alumni', [HomeController::class, 'uploadalumni'])->name('upload-alumni');

Route::get('unduh', [PendidikanController::class, 'unduh'])->name('unduh');
Route::get('galeri', [PendidikanController::class, 'galeri'])->name('galeri');
Route::get('sastra', [PendidikanController::class, 'sastra'])->name('sastra');
Route::post('sastra', [PendidikanController::class, 'uploadsastra'])->name('upload-sastra');
Route::get('download/{id}', [PendidikanController::class, 'download'])->name('download');
Route::get('ekstrakurikuler', [PendidikanController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('ekstrakurikuler/{slug}', [PendidikanController::class, 'detailekstrakurikuler'])->name('detail-ekstrakurikuler');
Route::get('prestasi/siswa', [PendidikanController::class, 'prestasisiswa'])->name('prestasi-siswa');
Route::get('prestasi/siswa/{slug}', [PendidikanController::class, 'detailprestasisiswa'])->name('detail-prestasi-siswa');
Route::get('prestasi/guru', [PendidikanController::class, 'prestasiguru'])->name('prestasi-guru');
Route::get('prestasi/guru/{slug}', [PendidikanController::class, 'detailprestasiguru'])->name('detail-prestasi-guru');
Route::get('prestasi/sekolah', [PendidikanController::class, 'prestasisekolah'])->name('prestasi-sekolah');
Route::get('prestasi/sekolah/{slug}', [PendidikanController::class, 'detailprestasisekolah'])->name('detail-prestasi-sekolah');

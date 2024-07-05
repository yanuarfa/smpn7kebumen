<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sastra extends Model
{
    use HasFactory;

    protected $table = 'sastra';

    protected $fillable = [
        'nama_pengguna',
        'sosial_media',
        'judul',
        'file_karya',
        'deskripsi_karya',
        'created_at',
        'updated_at'
    ];
}

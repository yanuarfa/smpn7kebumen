<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    use HasFactory;

    protected $table = 'strukturorganisasi';
    protected $fillable = [
        'judul_struktur',
        'deskripsi_struktur',
        'gambar_struktur',
        'created_at',
        'updated_at'
    ];
}

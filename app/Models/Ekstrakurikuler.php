<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler';
    protected $fillable = [
        'nama',
        'slug',
        'gambar',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}

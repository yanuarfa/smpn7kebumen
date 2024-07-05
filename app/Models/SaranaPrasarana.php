<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaPrasarana extends Model
{
    use HasFactory;

    protected $table = 'saranaprasarana';

    protected $fillable = [
        'nama',
        'file_gambar',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}

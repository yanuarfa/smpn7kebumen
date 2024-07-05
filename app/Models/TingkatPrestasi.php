<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatPrestasi extends Model
{
    use HasFactory;

    protected $table = 'tingkatprestasi';
    protected $fillable = [
        'nama',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}

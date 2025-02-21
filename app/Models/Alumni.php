<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';

    protected $fillable = [
        'nama',
        'angkatan',
        'pekerjaan',
        'foto',
        'pesan',
        'created_at',
        'updated_at'
    ];
}

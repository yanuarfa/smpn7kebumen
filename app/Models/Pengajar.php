<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;

    protected $table = 'pengajar';

    protected $fillable = [
        'nama',
        'foto',
        'jabatan',
        'bidang',
        'email',
        'status',
        'created_at',
        'updated_at'
    ];
}

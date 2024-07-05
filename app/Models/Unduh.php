<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unduh extends Model
{
    use HasFactory;

    protected $table = 'unduh';

    protected $fillable = [
        'nama_file',
        'file',
        'updated_at',
        'created_at'
    ];
}

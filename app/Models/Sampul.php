<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampul extends Model
{
    use HasFactory;

    protected $table = 'sampul';

    protected $fillable = [
        'file_sampul',
        'deskripsi_sampul',
    ];
}

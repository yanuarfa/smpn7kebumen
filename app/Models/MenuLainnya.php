<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuLainnya extends Model
{
    use HasFactory;

    protected $table = 'menulainnya';

    protected $fillable = [
        'nama_menu',
        'link_menu',
        'created_at',
        'updated_at',
    ];
}

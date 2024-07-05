<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasi';
    protected $fillable = [
        'nama_prestasi',
        'jenisprestasi_id',
        'tingkatprestasi_id',
        'slug',
        'tahun',
        'kategori',
        'gambar',
        'detail_prestasi',
        'created_at',
        'updated_at',
    ];

    public function jenisprestasi(): BelongsTo
    {
        return $this->belongsTo(JenisPrestasi::class);
    }

    public function tingkatprestasi(): BelongsTo
    {
        return $this->belongsTo(TingkatPrestasi::class);
    }
}

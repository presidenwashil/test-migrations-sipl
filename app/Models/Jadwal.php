<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $primaryKey = 'id';

    protected $fillable = [
        'hari',
        'sesi',
        'waktu',
        'ajaran_id',
        'kelompok_id',
        'ruangan_id',
    ];

    public function ajaran(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Ajaran::class);
    }

    public function matakuliah(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Matakuliah::class);
    }

    public function kelompok(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Kelompok::class);
    }

    public function ruangan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }
}

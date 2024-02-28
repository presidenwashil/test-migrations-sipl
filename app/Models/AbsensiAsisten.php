<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiAsisten extends Model
{
    use HasFactory;

    protected $table = 'absensi_asistens';

    protected $fillable = [
        'asisten_id',
        'pertemuan_id',
    ];

    public function asisten(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Asisten::class);
    }

    public function pertemuan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pertemuan::class);
    }
}

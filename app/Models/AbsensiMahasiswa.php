<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'absensi_mahasiswas';

    protected $fillable = [
        'status',
        'pertemuan_id',
        'mahasiswa_id',
    ];

    public function mahasiswa(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function pertemuan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pertemuan::class);
    }
}

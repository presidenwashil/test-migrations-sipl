<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;

    protected $table = 'pertemuans';

    protected $fillable = [
        'pertemuan_ke',
        'kelompok_id',
    ];

    public function kelompok(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Kelompok::class);
    }

    public function absensiMahasiswa(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AbsensiMahasiswa::class);
    }

    public function absensiAsisten(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AbsensiAsisten::class);
    }

    public function pertemuanDetail(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PertemuanDetail::class);
    }
}

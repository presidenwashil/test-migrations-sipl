<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    protected $table = 'kelompoks';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'matakuliah_id',
    ];

    public function matakuliah(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Matakuliah::class);
    }

    public function jadwals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Jadwal::class);
    }

    public function pertemuans(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Pertemuan::class);
    }

    public function mahasiswas(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliahs';

    protected $fillable = [
        'kode',
        'nama',
        'sks',
        'kelas',
        'prodi_id'
    ];

    public function prodi(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function kelompok(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Kelompok::class);
    }

    public function dosen(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Dosen::class);
    }
}

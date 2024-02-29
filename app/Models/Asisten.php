<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asisten extends Model
{
    use HasFactory;

    protected $table = 'asistens';

    protected $primaryKey = 'id';

    protected $fillable = [
        'kode',
        'nama',
    ];

    public function absensiAsisten(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AbsensiAsisten::class);
    }
}

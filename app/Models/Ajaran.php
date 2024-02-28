<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajaran extends Model
{
    use HasFactory;

    protected $table = 'ajarans';

    protected $fillable = [
        'tahun',
        'semester',
        'is_active',
    ];

    public function jadwal(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Jadwal::class);
    }
}

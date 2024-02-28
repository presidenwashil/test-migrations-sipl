<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangans';

    protected $primaryKey = 'id';

    protected $fillable = [
        'kode',
        'nama',
    ];

    public function jadwal(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Jadwal::class);
    }
}

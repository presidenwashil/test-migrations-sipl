<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertemuanDetail extends Model
{
    use HasFactory;

    protected $table = 'pertemuan_details';

    protected $fillable = [
        'materi',
        'catatan',
        'pertemuan_id',
    ];

    public function pertemuan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pertemuan::class);
    }
}

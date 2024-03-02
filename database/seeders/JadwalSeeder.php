<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jadwal::insert([
            ['hari' => 'Senin', 'sesi' => 1, 'waktu' => '08:00 - 09:30', 'ajaran_id' => 8, 'matakuliah_id' => 4,'kelompok_id' => 7, 'ruangan_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['hari' => 'Senin', 'sesi' => 1, 'waktu' => '08:00 - 09:30', 'ajaran_id' => 8, 'matakuliah_id' => 4,'kelompok_id' => 8, 'ruangan_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Kelompok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelompok::insert([
            ['nama' => 'Kelompok 1', 'matakuliah_id' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kelompok 2', 'matakuliah_id' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kelompok 1', 'matakuliah_id' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kelompok 2', 'matakuliah_id' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kelompok 1', 'matakuliah_id' => '3', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kelompok 2', 'matakuliah_id' => '3', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kelompok 1', 'matakuliah_id' => '4', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kelompok 2', 'matakuliah_id' => '4', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ruangan::insert([
            ['kode' => 'P', 'nama' => 'Lab. Pemrograman', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'AK', 'nama' => 'Lab. Aplikasi Komputasi', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'AP', 'nama' => 'Lab. Aplikasi Profesional', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'J', 'nama' => 'Lab. Jaringan Komputer', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'SI', 'nama' => 'Lab. Sistem Informasi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

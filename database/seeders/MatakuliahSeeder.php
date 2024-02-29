<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matakuliah::insert([
            ['kode' => 'SIP2217', 'nama' => 'Praktikum Algoritma dan Pemrograman 2', 'sks' => '2', 'kelas' => 'PA', 'prodi_id' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'SIP2125', 'nama' => 'Praktikum Struktur Data', 'sks' => '1', 'kelas' => 'PA', 'prodi_id' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'SIP4144', 'nama' => 'Praktikum Pemrograman Berbasis Objek', 'sks' => '1', 'kelas' => 'PA', 'prodi_id' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'SIP4147', 'nama' => 'Praktikum Sistem Operasi', 'sks' => '1', 'kelas' => 'PA', 'prodi_id' => '2', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

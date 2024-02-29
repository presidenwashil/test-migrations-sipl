<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::insert([
            ['nim' => '2041001', 'nama' => 'Ade', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041002', 'nama' => 'Budi', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041003', 'nama' => 'Cici', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041004', 'nama' => 'Dedi', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041005', 'nama' => 'Euis', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041006', 'nama' => 'Fafa', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041007', 'nama' => 'Gaga', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041008', 'nama' => 'Hani', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041009', 'nama' => 'Iis', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041010', 'nama' => 'Joko', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041011', 'nama' => 'Kiki', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041012', 'nama' => 'Lala', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041013', 'nama' => 'Mama', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041014', 'nama' => 'Nana', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041015', 'nama' => 'Oma', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041016', 'nama' => 'Papa', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041017', 'nama' => 'Qiqi', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041018', 'nama' => 'Rara', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041019', 'nama' => 'Sasa', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2041020', 'nama' => 'Titi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

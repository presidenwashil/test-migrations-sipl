<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::insert([
            ['kode' => 'ITAR', 'nama' => 'Ita Arfyanti, S.Kom., M.M', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'AMEL', 'nama' => 'Amelia Yusnita, S.Kom., M.Kom', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'VILI', 'nama' => 'Vilianty Rafida, S.T., M.Kom', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'ANDI', 'nama' => 'Andi Yusika Rangan, S.Kom., M.Kom', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

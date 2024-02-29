<?php

namespace Database\Seeders;

use App\Models\Ajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ajaran::insert([
            ['tahun' => '2020/2021', 'semester' => 'Gasal', 'created_at' => now(), 'updated_at' => now()],
            ['tahun' => '2020/2021', 'semester' => 'Genap', 'created_at' => now(), 'updated_at' => now()],
            ['tahun' => '2021/2022', 'semester' => 'Gasal', 'created_at' => now(), 'updated_at' => now()],
            ['tahun' => '2021/2022', 'semester' => 'Genap', 'created_at' => now(), 'updated_at' => now()],
            ['tahun' => '2022/2023', 'semester' => 'Gasal', 'created_at' => now(), 'updated_at' => now()],
            ['tahun' => '2022/2023', 'semester' => 'Genap', 'created_at' => now(), 'updated_at' => now()],
            ['tahun' => '2023/2024', 'semester' => 'Gasal', 'created_at' => now(), 'updated_at' => now()],
            ['tahun' => '2023/2024', 'semester' => 'Genap', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

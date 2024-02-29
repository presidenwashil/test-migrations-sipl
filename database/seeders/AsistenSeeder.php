<?php

namespace Database\Seeders;

use App\Models\Asisten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsistenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asisten::insert([
            ['kode' => 'ER', 'nama' => 'Erdi Nurikhsan, S.Kom', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'DF', 'nama' => 'Aji Daffa Ramadhan Putra Yuliska, S.Kom', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'RN', 'nama' => 'Raihan Presiden Washil, A.Md.Kom', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'ZD', 'nama' => 'Muhammad Reynaldi Zidan', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'TA', 'nama' => 'Mohammad Febrian Triadi', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'RZ', 'nama' => 'Riezky Adi Prasetyo', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'SG', 'nama' => 'Sigit Syamsu Alam', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'AD', 'nama' => 'Andini Nurfianda', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'FI', 'nama' => 'Febri Almunahda', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'DY', 'nama' => 'Dea Ardila Rahmayanti', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'NK', 'nama' => 'Eunike', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'BY', 'nama' => 'Bayu Adhila Nurrahman', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'SP', 'nama' => 'Meireza Siti Assyifa', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'FZ', 'nama' => 'Muhammad Firza Fernanda', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'FO', 'nama' => 'Filio Angga Damaya', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'HF', 'nama' => 'Muhammad Hafriyandi Saputra', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'RG', 'nama' => 'Ragil Al-Fijrin', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'SK', 'nama' => 'Abizer Aprido Seka', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'MC', 'nama' => 'Michael Steeven', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'RF', 'nama' => 'Muhammad Radifa', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

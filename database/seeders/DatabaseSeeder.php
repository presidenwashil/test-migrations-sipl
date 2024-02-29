<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AjaranSeeder::class,
            ProdiSeeder::class,
            RuanganSeeder::class,
            DosenSeeder::class,
            MahasiswaSeeder::class,
            AsistenSeeder::class,
            MatakuliahSeeder::class,
            KelompokSeeder::class,
            JadwalSeeder::class,
            KelompokMahasiswaSeeder::class,
            DosenMatakuliahSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

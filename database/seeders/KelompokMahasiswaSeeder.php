<?php

namespace Database\Seeders;

use App\Models\Kelompok;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelompokMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $associations = [
            ['kelompok_id' => 1, 'mahasiswa_id' => 1],
            ['kelompok_id' => 1, 'mahasiswa_id' => 2],
            ['kelompok_id' => 1, 'mahasiswa_id' => 3],
            ['kelompok_id' => 1, 'mahasiswa_id' => 4],
            ['kelompok_id' => 1, 'mahasiswa_id' => 5],
            ['kelompok_id' => 1, 'mahasiswa_id' => 6],
            ['kelompok_id' => 1, 'mahasiswa_id' => 7],
            ['kelompok_id' => 1, 'mahasiswa_id' => 8],
            ['kelompok_id' => 1, 'mahasiswa_id' => 9],
            ['kelompok_id' => 1, 'mahasiswa_id' => 10],
            ['kelompok_id' => 2, 'mahasiswa_id' => 11],
            ['kelompok_id' => 2, 'mahasiswa_id' => 12],
            ['kelompok_id' => 2, 'mahasiswa_id' => 13],
            ['kelompok_id' => 2, 'mahasiswa_id' => 14],
            ['kelompok_id' => 2, 'mahasiswa_id' => 15],
            ['kelompok_id' => 2, 'mahasiswa_id' => 16],
            ['kelompok_id' => 2, 'mahasiswa_id' => 17],
            ['kelompok_id' => 2, 'mahasiswa_id' => 18],
            ['kelompok_id' => 2, 'mahasiswa_id' => 19],
            ['kelompok_id' => 2, 'mahasiswa_id' => 20],
            ['kelompok_id' => 3, 'mahasiswa_id' => 1],
            ['kelompok_id' => 3, 'mahasiswa_id' => 2],
            ['kelompok_id' => 3, 'mahasiswa_id' => 3],
            ['kelompok_id' => 3, 'mahasiswa_id' => 4],
            ['kelompok_id' => 3, 'mahasiswa_id' => 5],
            ['kelompok_id' => 3, 'mahasiswa_id' => 6],
            ['kelompok_id' => 3, 'mahasiswa_id' => 7],
            ['kelompok_id' => 3, 'mahasiswa_id' => 8],
            ['kelompok_id' => 3, 'mahasiswa_id' => 9],
            ['kelompok_id' => 3, 'mahasiswa_id' => 10],
            ['kelompok_id' => 4, 'mahasiswa_id' => 11],
            ['kelompok_id' => 4, 'mahasiswa_id' => 12],
            ['kelompok_id' => 4, 'mahasiswa_id' => 13],
            ['kelompok_id' => 4, 'mahasiswa_id' => 14],
            ['kelompok_id' => 4, 'mahasiswa_id' => 15],
            ['kelompok_id' => 4, 'mahasiswa_id' => 16],
            ['kelompok_id' => 4, 'mahasiswa_id' => 17],
            ['kelompok_id' => 4, 'mahasiswa_id' => 18],
            ['kelompok_id' => 4, 'mahasiswa_id' => 19],
            ['kelompok_id' => 4, 'mahasiswa_id' => 20],
            ['kelompok_id' => 5, 'mahasiswa_id' => 1],
            ['kelompok_id' => 5, 'mahasiswa_id' => 2],
            ['kelompok_id' => 5, 'mahasiswa_id' => 3],
            ['kelompok_id' => 5, 'mahasiswa_id' => 4],
            ['kelompok_id' => 5, 'mahasiswa_id' => 5],
            ['kelompok_id' => 5, 'mahasiswa_id' => 6],
            ['kelompok_id' => 5, 'mahasiswa_id' => 7],
            ['kelompok_id' => 5, 'mahasiswa_id' => 8],
            ['kelompok_id' => 5, 'mahasiswa_id' => 9],
            ['kelompok_id' => 5, 'mahasiswa_id' => 10],
            ['kelompok_id' => 6, 'mahasiswa_id' => 11],
            ['kelompok_id' => 6, 'mahasiswa_id' => 12],
            ['kelompok_id' => 6, 'mahasiswa_id' => 13],
            ['kelompok_id' => 6, 'mahasiswa_id' => 14],
            ['kelompok_id' => 6, 'mahasiswa_id' => 15],
            ['kelompok_id' => 6, 'mahasiswa_id' => 16],
            ['kelompok_id' => 6, 'mahasiswa_id' => 17],
            ['kelompok_id' => 6, 'mahasiswa_id' => 18],
            ['kelompok_id' => 6, 'mahasiswa_id' => 19],
            ['kelompok_id' => 6, 'mahasiswa_id' => 20],
            ['kelompok_id' => 7, 'mahasiswa_id' => 1],
            ['kelompok_id' => 7, 'mahasiswa_id' => 2],
            ['kelompok_id' => 7, 'mahasiswa_id' => 3],
            ['kelompok_id' => 7, 'mahasiswa_id' => 4],
            ['kelompok_id' => 7, 'mahasiswa_id' => 5],
            ['kelompok_id' => 7, 'mahasiswa_id' => 6],
            ['kelompok_id' => 7, 'mahasiswa_id' => 7],
            ['kelompok_id' => 7, 'mahasiswa_id' => 8],
            ['kelompok_id' => 7, 'mahasiswa_id' => 9],
            ['kelompok_id' => 7, 'mahasiswa_id' => 10],
            ['kelompok_id' => 8, 'mahasiswa_id' => 11],
            ['kelompok_id' => 8, 'mahasiswa_id' => 12],
            ['kelompok_id' => 8, 'mahasiswa_id' => 13],
            ['kelompok_id' => 8, 'mahasiswa_id' => 14],
            ['kelompok_id' => 8, 'mahasiswa_id' => 15],
            ['kelompok_id' => 8, 'mahasiswa_id' => 16],
            ['kelompok_id' => 8, 'mahasiswa_id' => 17],
            ['kelompok_id' => 8, 'mahasiswa_id' => 18],
            ['kelompok_id' => 8, 'mahasiswa_id' => 19],
            ['kelompok_id' => 8, 'mahasiswa_id' => 20],
        ];

        foreach ($associations as $association) {
            $kelompok = Kelompok::find($association['kelompok_id']);
            $mahasiswa = Mahasiswa::find($association['mahasiswa_id']);

            if ($kelompok && $mahasiswa) {
                $kelompok->mahasiswas()->attach($mahasiswa);
            }
        }
    }
}

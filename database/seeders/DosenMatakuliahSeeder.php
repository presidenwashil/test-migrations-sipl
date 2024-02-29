<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $associations = [
            ['dosen_id' => 1, 'matakuliah_id' => 1],
            ['dosen_id' => 2, 'matakuliah_id' => 2],
            ['dosen_id' => 3, 'matakuliah_id' => 3],
            ['dosen_id' => 4, 'matakuliah_id' => 4],
        ];

        foreach ($associations as $association) {
            $dosen = Dosen::find($association['dosen_id']);
            $matakuliah = Matakuliah::find($association['matakuliah_id']);

            if ($dosen && $matakuliah) {
                $dosen->matakuliahs()->attach($matakuliah);
            }
        }
    }
}

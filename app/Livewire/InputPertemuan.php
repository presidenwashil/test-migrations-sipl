<?php

namespace App\Livewire;

use App\Models\Pertemuan;
use Livewire\Component;

class InputPertemuan extends Component
{
    public $step = 1;
    public $pertemuan = [];
    public $absensiAsisten = [];
    public $absensiMahasiswa = [];
    public $pertemuanDetail = [];
    public $selectedKelompok = null;

    public function updatedPertemuan()
    {
        if (!empty($this->pertemuan['kelompok_id'])) {
            $this->selectedKelompok = \App\Models\Kelompok::find($this->pertemuan['kelompok_id']);
        }
    }

    public function getDataKelompokProperty()
    {
        return \App\Models\Kelompok::query()
            ->with('matakuliah')
            ->get();
    }

    public function render()
    {
        $mahasiswa = [];
        if ($this->selectedKelompok) {
            $mahasiswa = $this->selectedKelompok->mahasiswa;
        }
    
        return view('livewire.input-pertemuan', [
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function save()
    {
        Pertemuan::create($this->pertemuan);
        AbsensiAsisten::create($this->absensiAsisten);
        AbsensiMahasiswa::create($this->absensiMahasiswa);
        PertemuanDetail::create($this->pertemuanDetail);
    }

}

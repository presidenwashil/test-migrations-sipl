<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class KelolaPertemuan extends Component
{
    public $kelompokId;

    protected $listeners = ['select2Changed' => 'updateSelect2Value'];

    public function mount($kelompok): void 
    {
        $this->kelompokId = $kelompok;
    }

    public function render()
    {
        return view('livewire.pages.kelola-pertemuan')
            ->layout(\App\View\Components\AppLayout::class, ['title' => 'Pertemuan']);;
    }

    public function getKelompokProperty()
    {
        return \App\Models\Kelompok::with('mahasiswas')->find($this->kelompokId);
    }

    public function getPertemuanKeProperty()
    {
        return \App\Models\Pertemuan::where('kelompok_id', $this->kelompokId)->count() + 1;
    }

    public function getAsistenProperty()
    {
        return \App\Models\Asisten::pluck('nama', 'id');
    }

    public function create()
    {
        $this->validate([
            'kelompokId' => 'required',
            'pertemuanKe' => 'required',
            'tanggal' => 'required',
            'asistenId' => 'required',
        ]);

        \App\Models\Pertemuan::create([
            'kelompok_id' => $this->kelompokId,
            'pertemuan_ke' => $this->pertemuanKe,
            'tanggal' => $this->tanggal,
        ]);

        \App\Models\AbsensiAsisten::create([
            'asisten_id' => $this->asistenId,
            'pertemuan_id' => $this->kelompok->pertemuan->last()->id,
        ]);

        foreach ($this->kelompok->mahasiswas as $mahasiswa) {
            \App\Models\AbsensiMahasiswa::create([
                'mahasiswa_id' => $mahasiswa->id,
                'pertemuan_id' => $this->kelompok->pertemuan->last()->id,
                'status' => 'Hadir',
            ]);
        }

        \App\Models\PertemuanDetail::create([
            'pertemuan_id' => $this->kelompok->pertemuan->last()->id,
            'materi' => 'Materi pertemuan ke ' . $this->pertemuanKe,
            'catatan' => 'Catatan pertemuan ke ' . $this->pertemuanKe,
        ]);

        $this->emit('pertemuanAdded');
    }

}

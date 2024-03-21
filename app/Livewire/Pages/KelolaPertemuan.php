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

    public function updateSelect2Value($name, $value)
    {
        $this->$name = $value;
    }

}

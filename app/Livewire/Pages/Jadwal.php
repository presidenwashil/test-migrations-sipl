<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Jadwal extends Component
{
    /** @var array */
    public $jadwal = [];

    public $kelompokId;

    public function mount(): void 
    {
        $this->jadwal = \App\Models\Jadwal::with('kelompok', 'kelompok.matakuliah', 'ruangan')->get();
    }

    public function render()
    {
        return view('livewire.pages.jadwal')
            ->layout(\App\View\Components\AppLayout::class, ['title' => 'Jadwal']);
    }

    public function goToPertemuanByKelompokId($kelompokId)
    {
        return redirect()->to(route('kelola-pertemuan', ['kelompok' => $kelompokId]));
    }
}

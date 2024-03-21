<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pertemuan;

class RekapAbsen extends Component
{
    public $absen;

    public function mount()
    {
        $this->absen = Pertemuan::all();
    }

    public function render()
    {
        return view('livewire.rekap-absen');
    }
}

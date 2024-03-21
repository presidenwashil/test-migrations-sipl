<?php

use App\Models\Jadwal;
use Livewire\Volt\Component;

new class extends Component {
    
    public $jadwals;

    public $kelompokId;
    
    public function mount(): void
    {
        $this->jadwals = Jadwal::with('kelompok','kelompok.matakuliah','ruangan')->get();

        $this->defaultValues();
    }

    public function defaultValues(): array
    {
        return [
            'kelompokId' => '',
        ];
    }

    public function navigate($kelompokId)
    {
        return redirect()->route('kelola-pertemuan', ['kelompok_id' => $kelompokId]);
    }
}; ?>

<div class="grid gap-4 grid-cols-3 grid-rows-3">
@foreach($jadwals as $jadwal)   
    <div class="p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg mb-4 columns: 6"> 
        <div class="flex items center justify-between">      
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $jadwal->kelompok->matakuliah->nama }}</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $jadwal->kelompok->nama }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $jadwal->hari }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $jadwal->waktu }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $jadwal->ruangan->nama }}</p>
                <x-primary-button wire:click="navigate">{{ __('Kelola') }}</x-primary-button>
            </div>
        </div>
    </div>
@endforeach
</div>

<?php

use App\Models\Jadwal;
use App\Models\Kelompok;
use App\Models\Ruangan;
use App\Models\Ajaran;
use Livewire\Volt\Component;

new class extends Component {
    
    /** @var array */
    public $jadwal;

    public $hari;

    public $sesi;

    public $waktu;

    public $ajaran;

    public $kelompok;

    public $ruangan;

    public $kelompok_id;

    public $ruangan_id;

    public $ajaran_id;

    public function mount(): void
    {
        $this->kelompok = Kelompok::with('matakuliah')->get();
        $this->ruangan = Ruangan::all();
        $this->ajaran = Ajaran::all();
    }

    public function create(): void
    // END: abpxx6d04wxr
    {
        $this->validate([
            'hari' => 'required',
            'sesi' => 'required',
            'waktu' => 'required',
            'ajaran_id' => 'required',
            'kelompok_id' => 'required',
            'ruangan_id' => 'required',
        ]);

        Jadwal::create([
            'hari' => $this->hari,
            'sesi' => $this->sesi,
            'waktu' => $this->waktu,
            'ajaran_id' => $this->ajaran_id,
            'kelompok_id' => $this->kelompok_id,
            'ruangan_id' => $this->ruangan_id,
        ]);

        $this->reset('hari', 'sesi', 'waktu', 'ajaran_id', 'kelompok_id', 'ruangan_id');

        $this->redirect('/jadwal');
    }

}; ?>

<div>
    
    <h1 class="text-2xl font-semibold text-gray-800">Tambah Jadwal</h1>
    <form wire:submit.prevent="create">
        <div class="grid grid-cols-6 gap-6 mt-4">
            <div class="col-span-6 sm:col-span-3">
                <label for="hari" class="block text-sm font-medium text-gray-700">Hari</label>
                <input type="text" wire:model="hari" id="hari" name="hari" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('hari') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="sesi" class="block text-sm font-medium text-gray-700">Sesi</label>
                <input type="text" wire:model="sesi" id="sesi" name="sesi" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('sesi') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="waktu" class="block text-sm font-medium text-gray-700">Waktu</label>
                <input type="text" wire:model="waktu" id="waktu" name="waktu" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('waktu') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            
            <div class="col-span-6 sm:col-span-3">
                <label for="ajaran_id" class="block text-sm font-medium text-gray-700">Ajaran</label>
                <select wire:model="ajaran_id" id="ajaran_id" name="ajaran_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="">Pilih Ajaran</option>
                    @if($ajaran)
                        @foreach($ajaran as $a)
                        <option value="{{ $a->id }}">{{ $a->tahun }} {{ $a->semester }}</option>
                        @endforeach
                    @endif
                </select>
                @error('ajaran_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="kelompok_id" class="block text sm font-medium text-gray-700">Kelompok</label>
                <select wire:model="kelompok_id" id="kelompok_id" name="kelompok_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="">Pilih Kelompok</option>
                    @if($kelompok)
                        @foreach($kelompok as $k)
                        <option value="{{ $k->id }}">{{ $k->matakuliah->nama}} {{ $k->nama }}</option>
                        @endforeach
                    @endif
                </select>
                @error('kelompok_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="ruangan_id" class="block text sm font-medium text-gray-700">Ruangan</label>
                <select wire:model="ruangan_id" id="ruangan_id" name="ruangan_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="">Pilih Ruangan</option>
                    @if($ruangan)
                        @foreach($ruangan as $r)
                        <option value="{{ $r->id }}">{{ $r->nama }}</option>
                        @endforeach
                    @endif
                </select>
                @error('ruangan_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <x-primary-button type="submit">Tambah</x-primary-button>
        </div>
    </form>

</div>

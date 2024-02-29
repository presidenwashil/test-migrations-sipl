<?php

use App\Models\Kelompok;
use App\Models\Pertemuan;
use App\Models\Asisten;
use App\Models\Mahasiswa;
use App\Models\PertemuanDetail;
use Livewire\Volt\Component;
use Illuminate\Support\Collection;

new class extends Component {

    public Collection $kelompoks;
    public Collection $asistens;
    public Collection $mahasiswas;

    public array $pertemuan = [
        'pertemuan_ke' => '',
        'kelompok_id' => '',
        'asisten_id' => '',
        'mahasiswa_id' => '',
        'materi' => '',
        'catatan' => '',
    ];

    public function mount(): void
    {
        $this->kelompoks = Kelompok::all();
        $this->asistens = Asisten::all();
        $this->mahasiswas = Mahasiswa::all();

        $this->pertemuan['pertemuan_ke'] = Pertemuan::where('kelompok_id', $this->pertemuan['kelompok_id'])->count() + 1;
    }

    public function create(): void
    {
        $this->validate([
            'pertemuan.pertemuan_ke' => ['required', 'integer', 'min:1'],
            'pertemuan.kelompok_id' => ['required', 'exists:kelompoks,id'],
            'pertemuan.asisten_id' => ['required', 'exists:asistens,id'],
            'pertemuan.mahasiswa_id' => ['required', 'exists:mahasiswas,id'],
            'pertemuan.materi' => ['required', 'string'],
            'pertemuan.catatan' => ['required', 'string'],
        ]);

        // Create pertemuan
        $pertemuan = Pertemuan::create([
            'pertemuan_ke' => $this->pertemuan['pertemuan_ke'],
            'kelompok_id' => $this->pertemuan['kelompok_id'],
        ]);

        // Create absensi asisten
        $pertemuan->asistens()->attach($this->pertemuan['asisten_id']);

        // Create absensi mahasiswa
        $pertemuan->mahasiswas()->attach($this->pertemuan['mahasiswa_id']);

        // Create pertemuan detail
        PertemuanDetail::create([
            'materi' => $this->pertemuan['materi'],
            'catatan' => $this->pertemuan['catatan'],
            'pertemuan_id' => $pertemuan->id,
        ]);
    }
}; ?>

<div>
    <form wire:submit.prevent="create">
        <div class="mb-4">
            <label for="pertemuan_ke" class="block text gray-700 text-sm font-bold mb-2">Pertemuan Ke</label>
            <input type="text" wire:model="pertemuan.pertemuan_ke" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pertemuan_ke" placeholder="Pertemuan Ke">
            @error('pertemuan.pertemuan_ke') 
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="kelompok_id" class="block text gray-700 text-sm font-bold mb-2">Kelompok</label>
            <select wire:model="pertemuan.kelompok_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="kelompok_id">
                <option value="">Pilih Kelompok</option>
                @foreach ($kelompoks as $kelompok)
                    <option value="{{ $kelompok->id }}">{{ $kelompok->id }}</option>
                @endforeach
            </select>
            @error('pertemuan.kelompok_id') 
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <!-- Add new fields here -->
        <div class="mb-4">
            <label for="asisten_id" class="block text gray-700 text-sm font-bold mb-2">Asisten</label>
            <select wire:model="pertemuan.asisten_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asisten_id">
                <option value="">Pilih Asisten</option>
                @foreach ($asistens as $asisten)
                    <option value="{{ $asisten->id }}">{{ $asisten->id }}</option>
                @endforeach
            </select>
            @error('pertemuan.asisten_id') 
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="mahasiswa_id" class="block text gray-700 text-sm font-bold mb-2">Mahasiswa</label>
            <select wire:model="pertemuan.mahasiswa_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mahasiswa_id">
                <option value="">Pilih Mahasiswa</option>
                @foreach ($mahasiswas as $mahasiswa)
                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->id }}</option>
                @endforeach
            </select>
            @error('pertemuan.mahasiswa_id') 
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="materi" class="block text gray-700 text-sm font-bold mb-2">Materi</label>
            <input type="text" wire:model="pertemuan.materi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="materi" placeholder="Materi">
            @error('pertemuan.materi') 
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="catatan" class="block text gray-700 text-sm font-bold mb-2">Catatan</label>
            <textarea wire:model="pertemuan.catatan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="catatan" placeholder="Catatan"></textarea>
            @error('pertemuan.catatan') 
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>

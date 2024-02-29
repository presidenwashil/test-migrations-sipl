<?php

use App\Models\Jadwal;
use Livewire\Volt\Component;

new class extends Component {
    
    public $jadwal;

    public function mount(): void
    {
        $this->jadwal = Jadwal::with('kelompok', 'ruangan')->get();
    }

}; ?>

<div>
    <h1 class="text-2xl font-semibold text-gray-800">Jadwal</h1>
    <div class="mt-4">
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-400 uppercase border-b">
                        <th class="px-4 py-3">Hari</th>
                        <th class="px-4 py-3">Sesi</th>
                        <th class="px-4 py-3">Waktu</th>
                        <th class="px-4 py-3">Kelompok</th>
                        <th class="px-4 py-3">Ruangan</th>
                        <th class="px-4 py-3">Tahun Akademik</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    @foreach($jadwal as $j)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3">{{ $j->hari }}</td>
                            <td class="px-4 py-3">{{ $j->sesi }}</td>
                            <td class="px-4 py-3">{{ $j->waktu }}</td>
                            <td class="px-4 py-3">{{$j->kelompok->matakuliah->nama}} {{ $j->kelompok->nama }}</td>
                            <td class="px-4 py-3">{{ $j->ruangan->nama }}</td>
                            <td class="px-4 py-3">{{ $j->ajaran->tahun }} {{ $j->ajaran->semester}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

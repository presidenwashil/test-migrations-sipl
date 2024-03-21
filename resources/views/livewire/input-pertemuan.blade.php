<div>
    @if($step == 1)
        <!-- Pertemuan Form -->
        <input type="number" wire:model="pertemuan.pertemuan_ke" placeholder="Pertemuan Ke">
        <input type="number" wire:model="pertemuan.kelompok_id" placeholder="Kelompok ID">
        <button wire:click="$set('step', 2)">Next</button>
    @elseif($step == 2)
        <!-- Absensi Asisten Form -->
        <input type="number" wire:model="absensiAsisten.asisten_id" placeholder="Asisten ID">
        <button wire:click="$set('step', 3)">Next</button>
        @if($step == 3)
        <!-- Absensi Mahasiswa Form -->
            @foreach($mahasiswa as $mhs)
                <label>{{ $mhs->nama }}</label>
                <input type="text" wire:model="absensiMahasiswa.{{ $mhs->id }}.status" placeholder="Status">
            @endforeach
            <button wire:click="$set('step', 4)">Next</button>
        @endif
    @elseif($step == 4)
        <!-- Pertemuan Detail Form -->
        <input type="text" wire:model="pertemuanDetail.materi" placeholder="Materi">
        <input type="text" wire:model="pertemuanDetail.catatan" placeholder="Catatan">
        <button wire:click="save">Submit</button>
    @endif
</div>
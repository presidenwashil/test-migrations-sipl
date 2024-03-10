<div>

    @foreach ($this->jadwal as $item)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $item->matakuliah->nama }} - {{ $item->kelompok->nama }}</h5>
                <a href="/daftar-kelompok/{{ $item->kelompok->id }}" class="card-link">Kelola Pertemuan</a>
            </div>
        </div>
    @endforeach




    {{-- @foreach ($this->jadwal as $item)
        <div class="card">
            <div class="card-header">
                <span>{{ $item->matakuliah->nama }} - {{ $item->kelompok->nama }}</span>
            </div>
            <div class="card-body">
                <span><strong>Hari:</strong> {{ $item->hari }}</span>
                <span><strong>Sesi:</strong> {{ $item->sesi }}</span>
                <span><strong>Waktu:</strong> {{ $item->waktu }}</span>
                <span><strong>Tahun Akademik:</strong> {{ $item->ajaran->tahun }}</span>
                <span><strong>Semester:</strong> {{ $item->ajaran->semester }}</span>
                <span><strong>Matakuliah:</strong> {{ $item->matakuliah->nama }}</span>
                <span><strong>Ruangan:</strong> {{ $item->ruangan->nama }}</span>
                <a href="/daftar-kelompok/{{ $item->kelompok->id }}" wire:navigate>
                    Kelola Pertemuan
                </a>
            </div>
        </div>
    @endforeach --}}
</div>

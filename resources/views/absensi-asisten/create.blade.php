<div>
    <h1>Tambah Absensi Asisten</h1>
    <form action="{{ route('absensi-asisten.store', ['kelompok' => $kelompok->id,'pertemuan' => $pertemuan->id]) }}" method="POST">
        @csrf
        <label for="asisten_id">Asisten</label>
        <select name="asisten_id" id="asisten_id">
            @foreach ($asisten as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        <button type="submit">Tambah</button>
    </form>
</div>
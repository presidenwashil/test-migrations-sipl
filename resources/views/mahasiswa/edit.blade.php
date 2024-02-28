<div>
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}">
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}">
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</div>

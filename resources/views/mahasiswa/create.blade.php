<div>
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <div>
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim">
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</div>

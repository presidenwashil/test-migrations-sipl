<div>
    <h1>Tambah Dosen</h1>
    <form action="{{ route('dosen.store') }}" method="post">
        @csrf
        <div>
            <label for="kode">Kode</label>
            <input type="text" name="kode" id="kode">
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('dosen.index') }}">Kembali</a>
</div>

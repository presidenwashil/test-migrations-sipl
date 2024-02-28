<div>
    <h1>Edit Dosen</h1>
    <form action="{{ route('dosen.update', $dosen->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="kode">kode</label>
            <input type="text" name="kode" id="kode" value="{{ $dosen->kode }}">
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $dosen->nama }}">
        </div>
        <button type="submit">Simpan</button>
</div>

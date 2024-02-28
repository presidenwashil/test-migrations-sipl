<div>
    <h1>Tambah Ajaran</h1>
    <form action="{{ route('ajaran.store') }}" method="post">
        @csrf
        <div>
            <label for="Tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun">
        </div>
        <div>
            <label for="semester">Semester</label>
            <input type="text" name="semester" id="semester">
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('ajaran.index') }}">Kembali</a>
</div>

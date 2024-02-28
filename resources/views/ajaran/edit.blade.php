<div>
    <h1>Edit Ajaran</h1>
    <form action="{{ route('ajaran.update', $ajaran->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun" value="{{ $ajaran->tahun }}">
        </div>
        <div>
            <label for="semester">Semester</label>
            <input type="text" name="semester" id="semester" value="{{ $ajaran->semester }}">
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('ajaran.index') }}">Kembali</a>
</div>

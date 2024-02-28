<div>
    <h1>Daftar Dosen</h1>
    <a href="{{ route('dosen.create') }}">Tambah Dosen</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>kode</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $dsn)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dsn->kode }}</td>
                    <td>{{ $dsn->nama }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $dsn->id) }}">Edit</a>
                        <form action="{{ route('dosen.destroy', $dsn->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

</div>

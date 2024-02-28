<div>
    <h1>Daftar Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

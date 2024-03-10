<div>
    <h1>Jadwal</h1>
    <a href="{{ route('jadwal.create') }}">Tambah Jadwal</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Sesi</th>
                <th>Waktu</th>
                <th>Tahun Akademik</th>
                <th>Semester</th>
                <th>Matakuliah</th>
                <th>Kelompok</th>
                <th>Ruangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->hari }}</td>
                    <td>{{ $item->sesi }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>{{ $item->ajaran->tahun }}</td>
                    <td>{{ $item->ajaran->semester }}</td>
                    <td>{{ $item->matakuliah->nama }}</td>
                    <td>{{ $item->kelompok->nama }}</td>
                    <td>{{ $item->ruangan->nama }}</td>
                    <td>
                        {{-- <a href="{{ route('jadwal.pertemuan', $item->id) }}">Pertemuan</a> --}}
                        <a href="{{ route('jadwal.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('jadwal.destroy', $item->id) }}" method="post">
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

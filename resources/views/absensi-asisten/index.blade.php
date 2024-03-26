<div>
    <h1>Daftar Absensi Asisten</h1>
    <a href="{{ route('absensi-asisten.create', ['kelompok' => $kelompok->id,'pertemuan' => $pertemuan->id]) }}">Tambah Absensi Asisten</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Create at</th>
                <th>Update at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absensiAsisten as $absensi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $absensi->asisten->kode }}</td>
                    <td>{{ $absensi->asisten->nama }}</td>
                    <td>{{ $absensi->created_at }}</td>
                    <td>{{ $absensi->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('pertemuan.index', ['kelompok' => $kelompok->id, 'pertemuan' => $pertemuan->id]) }}">Kembali</a>
</div>
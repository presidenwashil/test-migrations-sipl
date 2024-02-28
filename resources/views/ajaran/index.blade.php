<div>
    <h1>Daftar Ajaran</h1>
    <a href="{{ route('ajaran.create') }}">Tambah Ajaran</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ajaran as $ajr)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ajr->tahun }}</td>
                    <td>{{ $ajr->semester }}</td>
                    <td>
                        <a href="{{ route('ajaran.edit', $ajr->id) }}">Edit</a>
                        <form action="{{ route('ajaran.destroy', $ajr->id) }}" method="post">
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

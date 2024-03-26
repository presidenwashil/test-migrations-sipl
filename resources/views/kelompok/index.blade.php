<div>
    <h1>Kelompok</h1>
    <a href="{{ route('kelompok.create') }}">Tambah Kelompok</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Matakuliah</th>
                <th>Kelompok</th>
                <th>Action</th>
                <th>Sub Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelompok as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->matakuliah->nama }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <a href="{{ route('kelompok.show', $item->id) }}">Detail</a>
                        <a href="{{ route('kelompok.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('kelompok.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <li>
                            <a href="{{ route('pertemuan.index', ['kelompok' => $item->id]) }}">List Pertemuan</a>
                        </li>
                        <li>
                            <a href="{{ route('kelompok.show', $item->id) }}">Rekap</a>
                        </li>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $kelompok->links() }} --}}
</div>

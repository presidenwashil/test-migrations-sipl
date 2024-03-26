<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pertemuan</h1>
                <a href="{{ route('pertemuan.create', ['kelompok' => $kelompok->id]) }}" class="btn btn-primary">Tambah Pertemuan</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pertemuan_ke</th>
                            <th>Kelompok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pertemuan as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->pertemuan_ke }}</td>
                                <td>
                                    <a href="{{ route('pertemuan.edit',['kelompok' => $kelompok->id, 'pertemuan' => $p->id]) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('pertemuan.destroy', ['kelompok' => $kelompok->id, 'pertemuan' => $p->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('absensi-asisten.index', ['kelompok' => $kelompok->id, 'pertemuan' => $p->id]) }}" class="btn btn-info">Absensi Asisten</a>
                                    <a href="{{ route('absensi-mahasiswa.index', ['kelompok' => $kelompok->id, 'pertemuan' => $p->id]) }}" class="btn btn-info">Absensi Mahasiswa</a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $pertemuan->links() }} --}}
            </div>
        </div>
    </div>

    <a href="{{ route('kelompok.index') }}" class="btn btn-primary">Kembali</a>
</div>

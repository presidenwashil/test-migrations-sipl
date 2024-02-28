<div>
    <h1>Daftar Pertemuan</h1>
    @foreach ($pertemuan as $item)
        <h2>{{ $item->nama }}</h2>
        <ul>
            @foreach ($item->absensi as $absen)
                <li>
                    {{ $absen->mahasiswa->nama }}
                    <form action="{{ route('absensi.update', $absen->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <select name="status">
                            @foreach ($statuses as $status)
                                <option value="{{ $status }}" {{ $absen->status == $status ? 'selected' : '' }}>
                                    {{ ucfirst($status) }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit">Ubah Status</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endforeach
</div>

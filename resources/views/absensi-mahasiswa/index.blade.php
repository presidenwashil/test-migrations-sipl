<div>
    <form action="{{ route('absensi-mahasiswa.store', ['kelompok' => $kelompok->id, 'pertemuan' => $pertemuan->id]) }}" method="POST">
        @csrf

        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    @php
                        $absensi = \App\Models\AbsensiMahasiswa::where([
                            'kelompok_id' => $kelompok->id,
                            'pertemuan_id' => $pertemuan->id,
                            'mahasiswa_id' => $mhs->id,
                        ])->first();
                    @endphp

                    <tr>
                        <td>{{$mhs->nim}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>
                            <select name="status[{{$mhs->id}}]">
                                <option value="hadir" {{ $absensi && $absensi->status == 'hadir' ? 'selected' : '' }}>Hadir</option>
                                <option value="sakit" {{ $absensi && $absensi->status == 'sakit' ? 'selected' : '' }}>Sakit</option>
                                <option value="izin" {{ $absensi && $absensi->status == 'izin' ? 'selected' : '' }}>Izin</option>
                                <option value="alfa" {{ $absensi && $absensi->status == 'alfa' ? 'selected' : '' }}>Alfa</option>
                                <option value="online" {{ $absensi && $absensi->status == 'online' ? 'selected' : '' }}>Online</option>
                            </select>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button type="submit">Submit</button>
    </form>
</div>
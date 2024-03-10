<div>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th rowspan="2" style="border: 1px solid #000; padding: 5px;">No</th>
                <th rowspan="2" style="border: 1px solid #000; padding: 5px;">NIM</th>
                <th rowspan="2" style="border: 1px solid #000; padding: 5px;">Nama</th>
                <th colspan="{{ count($data) }}" style="border: 1px solid #000; padding: 5px; text-align:center;">
                    Pertemuan</th>
            </tr>
            <tr>
                @foreach ($data as $p)
                    <th style="border: 1px solid #000; padding: 5px;">{{ $p->pertemuan_ke }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $p)
                @foreach ($p->absensiMahasiswas as $absensi)
                    <tr>
                        <td style="border: 1px solid #000; padding: 5px;">{{ $no++ }}</td>
                        <td style="border: 1px solid #000; padding: 5px;">{{ $absensi->mahasiswa->nim }}</td>
                        <td style="border: 1px solid #000; padding: 5px;">{{ $absensi->mahasiswa->nama }}</td>
                        <td style="border: 1px solid #000; padding: 5px;">
                            @switch($absensi->status)
                                @case('hadir')
                                    H
                                @break

                                @case('izin')
                                    I
                                @break

                                @case('sakit')
                                    S
                                @break

                                @case('alpa')
                                    A
                                @break

                                @case('online')
                                    O
                                @break

                                @default
                                    -
                            @endswitch
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3" style="border: 1px solid #000; padding: 5px;">Kode Asisten:</td>
                    <td style="border: 1px solid #000; padding: 5px;">{{ $p->asisten_kode }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

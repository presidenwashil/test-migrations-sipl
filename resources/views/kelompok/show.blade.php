<div>
    <a href="{{ route('pertemuan.create', ['kelompok' => $kelompok->id]) }}">Tambah pertemuan</a>

    <table>
        <thead>
            <tr>
                <th rowspan="2">Nim</th>
                <th rowspan="2">Nama</th>
                <th colspan="{{ count($kelompok->pertemuan) }}">Pertemuan</th>
            </tr>
            <tr>
                @foreach ($kelompok->pertemuan as $p)
                    <th><a
                            href="{{ route('pertemuan.show', ['kelompok' => $kelompok->id, 'pertemuan' => $p->id]) }}">{{ $p->pertemuan_ke }}</a>
                    </th>
                @endforeach
        </thead>
        <tbody>
            @foreach ($kelompok->mahasiswas as $m)
                <tr>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td style="border: 1px solid #000; padding: 5px;">
                        @switch($m->status)
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
        </tbody>

    </table>

</div>

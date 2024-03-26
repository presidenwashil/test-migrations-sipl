<div>
<table>
<div style="text-align: center;">
        <img src="" width="150" height="150" margin="0" style=" display: inline-block; vertical-align: middle;">
        <div style="display: inline-block; vertical-align: middle;">
            <h2 style="font-family: 'Times New Roman', Times, serif; font: size 16pt; ; margin: 0;">SEKOLAH TINGGI MANAJEMEN
                INFORMATIKA
                dan KOMPUTER</h2>
            <h1 style="font-family: 'Times New Roman', Times, serif; font-size: 24pt; margin: 0;">
                WIDYA CIPTA DHARMA
            </h1>
            <p style="font-size: 12pt; margin: 1px;">Status Terakreditasi Badan Akreditasi Nasional Perguruan Tinggi</p>
            <p style="font-size: 12pt; margin: 1px;"> Jl. M. Yamin No. 25 Samarinda - Kalimantan Timur 75123 Telp. 0541
                -
                736071 Fax. 203492,734468<br>
                E-mail : wicida@wicida.ac.id
            </p>
        </div>
    </div>
</div>

<hr style="border-top: 2px solid #333; margin-top: 10px; margin-bottom: 1px;">
<hr style="border-top: 2px solid #333; margin-top: 1px; margin-bottom: 10px;">

@if ($kelompok->jadwals->first() && $kelompok->jadwals->first()->ruangan)
    <tr>
        <td colspan="2">
            <p>Ruangan : {{ $kelompok->jadwals->first()->ruangan->nama }}</p>
        </td>
    </tr>
@endif

@if ($kelompok->matakuliah)
    <tr>
        <td colspan="2"><p style="text-align: center;">Matakuliah : {{ $kelompok->matakuliah->nama }}</p></td>
        @foreach($kelompok->jadwals as $jadwal)
        <td>
            <p style="text-align: center;">Tahun Ajaran : {{ $jadwal->ajaran->tahun }}</p>
        </td>
        @endforeach
    </tr>
@endif


<table width="100%" border="1" cellpadding="2" style="border-collapse: collapse;">
    <tr>
        <td rowspan="3" bgcolor="#EFEBE9" align="center">NO</td>
        <td rowspan="3" bgcolor="#EFEBE9" align="center">NIM</td>
        <td rowspan="3" bgcolor="#EFEBE9">NAMA MAHASISWA</td>
        <td colspan="{{ $kelompok->pertemuans->count() }}" style="padding: 8px;" bgcolor="#EFEBE9" align="center"><b>Pertemuan</b></td>
    </tr>

    <tr>
        @foreach($kelompok->pertemuans as $pertemuan)
            <td bgcolor="#EFEBE9">{{ $pertemuan->pertemuan_ke }}</td>
        @endforeach
    </tr>

    <tr>
        @foreach($kelompok->pertemuans as $pertemuan)
            <td bgcolor="#EFEBE9">{{ $pertemuan->created_at->format('m-d') }}</td>
        @endforeach
    </tr>

    @foreach($kelompok->mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            @foreach($kelompok->pertemuans as $pertemuan)
                @php
                    $absensi = $pertemuan->absensiMahasiswas->firstWhere('mahasiswa_id', $mahasiswa->id);
                @endphp
                <td>{{ $absensi ? $absensi->status : 'N/A' }}</td>
            @endforeach
        </tr>
    @endforeach

    <tr>
        <td colspan="3" style="text-align: center">Asisten</td>
        @foreach($kelompok->pertemuans as $pertemuan)
            @php
                $asistenKode = $pertemuan->absensiAsistens->pluck('asisten.kode')->join(', ');
            @endphp
            <td>{{ $asistenKode }}</td>
        @endforeach
    </tr>
    
</table>
</div>

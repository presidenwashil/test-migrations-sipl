<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <h1>Form Input Data</h1>

    <form action="" method="POST">
        @csrf

        <!-- Informasi Pertemuan -->
        <label for="pertemuan_ke">Pertemuan Ke:</label>
        <input type="number" name="pertemuan_ke" required>

        <label for="kelompok_id">Kelompok ID:</label>
        <select name="kelompok_id" id="kelompok_id" required>
            <!-- Ambil data kelompok dari pertemuans -->
            @foreach ($pertemuans as $pertemuan)
                <option value="{{ $pertemuan->kelompok_id }}">{{ $pertemuan->kelompok_id }}</option>
            @endforeach
        </select>

        <!-- Informasi Absensi Asisten -->
        <label for="asisten_id">Asisten ID:</label>
        <input type="number" name="asisten_id" required>

        <!-- Informasi Absensi Mahasiswa -->
        <!-- Loop untuk menampilkan form absensi untuk setiap mahasiswa -->
        @foreach ($mahasiswas as $mahasiswa)
            <div>
                <label for="status_{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</label>
                <select name="status[{{ $mahasiswa->id }}]" id="status_{{ $mahasiswa->id }}">
                    <option value="hadir">Hadir</option>
                    <option value="izin">Izin</option>
                    <option value="sakit">Sakit</option>
                    <option value="alpa">Alpa</option>
                    <option value="online">Online</option>
                </select>
            </div>
        @endforeach

        <!-- Informasi Detail Pertemuan -->
        <label for="materi">Materi Pertemuan:</label>
        <textarea name="materi" rows="4" required></textarea>

        <label for="catatan">Catatan Pertemuan:</label>
        <textarea name="catatan" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
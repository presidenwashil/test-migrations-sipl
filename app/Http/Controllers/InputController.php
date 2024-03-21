<?php

namespace App\Http\Controllers;


use App\Models\Pertemuan;
use App\Models\Mahasiswa;
use App\Models\AbsensiAsisten;
use App\Models\AbsensiMahasiswa;
use App\Models\PertemuanDetail;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function showForm()
    {
        $pertemuans = Pertemuan::all(); // Anda mungkin ingin mengambil pertemuans sesuai dengan kebutuhan
        $mahasiswas = Mahasiswa::all();

        return view('form-input', compact('pertemuans', 'mahasiswas'));
    }

    public function getMahasiswaByKelompok($kelompok_id)
    {
        // Query untuk mendapatkan mahasiswa berdasarkan kelompok_id
        return Mahasiswa::where('kelompok_id', $kelompok_id)->get();
    }

    public function submitData(Request $request)
    {
        $data = $request->validate([
            'pertemuan_ke' => 'required|integer',
            'kelompok_id' => 'required|exists:pertemuans,kelompok_id',
            'asisten_id' => 'required|exists:asistens,id',
            'status' => 'required|array',
            'status.*' => 'in:hadir,izin,sakit,alpa,online',
            'materi' => 'required|string',
            'catatan' => 'required|string',
        ]);

        // Mendapatkan mahasiswa berdasarkan kelompok_id
        $mahasiswas = $this->getMahasiswaByKelompok($data['kelompok_id']);

        // Simpan informasi pertemuan
        $pertemuan = Pertemuan::create([
            'pertemuan_ke' => $data['pertemuan_ke'],
            'kelompok_id' => $data['kelompok_id'],
        ]);

        // Simpan informasi absensi asisten
        AbsensiAsisten::create([
            'asisten_id' => $data['asisten_id'],
            'pertemuan_id' => $pertemuan->id,
        ]);

        // Simpan informasi absensi mahasiswa
        foreach ($data['status'] as $mahasiswaId => $status) {
            if ($mahasiswas->contains('id', $mahasiswaId)) {
                AbsensiMahasiswa::create([
                    'status' => $status,
                    'mahasiswa_id' => $mahasiswaId,
                    'pertemuan_id' => $pertemuan->id,
                ]);
            }
        }

        // Simpan informasi detail pertemuan
        PertemuanDetail::create([
            'materi' => $data['materi'],
            'catatan' => $data['catatan'],
            'pertemuan_id' => $pertemuan->id,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disubmit.');
    }
}

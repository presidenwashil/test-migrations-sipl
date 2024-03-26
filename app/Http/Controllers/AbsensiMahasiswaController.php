<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Pertemuan;
use Illuminate\Http\Request;

class AbsensiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Kelompok $kelompok, Pertemuan $pertemuan)
    {
        $mahasiswa = $kelompok->mahasiswas()->get();

        return view('absensi-mahasiswa.index', compact('mahasiswa', 'kelompok', 'pertemuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absensi-mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Kelompok $kelompok, Pertemuan $pertemuan)
    {
        info($request->all());

        $status = $request->input('status');

        foreach ($status as $mahasiswaId => $statusValue) {
            \App\Models\AbsensiMahasiswa::updateOrCreate(
                [
                    'pertemuan_id' => $pertemuan->id,
                    'mahasiswa_id' => $mahasiswaId,
                ],
                ['status' => $statusValue]
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Kelompok $kelompok, Pertemuan $pertemuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

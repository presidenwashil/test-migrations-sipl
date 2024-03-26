<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Pertemuan;
use Illuminate\Http\Request;

class AbsensiAsistenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Kelompok $kelompok, Pertemuan $pertemuan)
    {
        $absensiAsisten = $pertemuan->absensiAsistens()->get();

        return view('absensi-asisten.index', compact('kelompok', 'pertemuan', 'absensiAsisten'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Kelompok $kelompok, Pertemuan $pertemuan)
    {
        $asisten = \App\Models\Asisten::all();

        return view('absensi-asisten.create', compact('kelompok', 'pertemuan', 'asisten'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'asisten_id' => 'required|exists:asistens,id',
        ]);

        $pertemuan = Pertemuan::find($request->pertemuan);
        $pertemuan->absensiAsistens()->create([
            'asisten_id' => $request->asisten_id,
        ]);

        return redirect()->route('absensi-asisten.index', ['kelompok' => $request->kelompok, 'pertemuan' => $request->pertemuan]);
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
    public function edit(string $id)
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

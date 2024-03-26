<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelompokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelompok = \App\Models\Kelompok::with('matakuliah')->get();

        return view('kelompok.index', ['kelompok' => $kelompok]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelompok = \App\Models\Kelompok::with('matakuliah','jadwals','jadwals.ajaran','pertemuans','pertemuans.absensiAsistens','pertemuans.absensiMahasiswas','pertemuans.pertemuanDetail')->findOrFail($id);
    
        return view('kelompok.show', ['kelompok' => $kelompok]);
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

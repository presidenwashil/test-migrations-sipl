<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Pertemuan;
use Illuminate\Http\Request;

class PertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertemuan = Pertemuan::all();
        return view('pertemuan.index', compact('pertemuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelompok = Kelompok::all();
        return view('pertemuan.create', compact('kelompok'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pertemuan::create($request->all());
        return redirect()->route('pertemuan.index', ['pertemuan' => Pertemuan::all()]);
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

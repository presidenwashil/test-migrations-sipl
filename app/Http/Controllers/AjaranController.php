<?php

namespace App\Http\Controllers;

use App\Models\Ajaran;
use Illuminate\Http\Request;

class AjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ajaran = Ajaran::all();
        return view('ajaran.index', compact('ajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ajaran::create($request->all());
        return redirect()->route('ajaran.index');
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
        $ajaran = Ajaran::findOrFail($id);
        return view('ajaran.edit', compact('ajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ajaran = Ajaran::findOrFail($id);
        $ajaran->update($request->all());
        return redirect()->route('ajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ajaran::findOrFail($id)->delete();
        return redirect()->route('ajaran.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Yayasan;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolahs = Sekolah::with('yayasan')->get();

        return view('sekolah.index', compact('sekolahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $yayasans = Yayasan::all();

        return view('sekolah.create', compact('yayasans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'yayasan_id'   => 'required',
            'nama_sekolah' => 'required',
            'jenjang'      => 'required',
            'alamat'       => 'required',
            'telepon' => 'nullable'
        ]);

        Sekolah::create($request->all());

        return redirect()->route('sekolah.index')
            ->with('success', 'Data sekolah berhasil ditambahkan');
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
        $sekolah = Sekolah::findOrFail($id);
        $yayasans = Yayasan::all();

        return view('sekolah.edit', compact('sekolah','yayasans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'yayasan_id'   => 'required',
            'nama_sekolah' => 'required',
            'jenjang'      => 'required',
            'alamat'       => 'required',
            'telepon' => 'nullable'
        ]);

        $sekolah = Sekolah::findOrFail($id);

        $sekolah->update($request->all());

        return redirect()->route('sekolah.index')
            ->with('success', 'Data sekolah berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sekolah = Sekolah::findOrFail($id);

        $sekolah->delete();

        return redirect()->route('sekolah.index')
            ->with('success', 'Data sekolah berhasil dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjamans = Peminjaman::orderBy('created_at', 'DESC')->get();
        return view('peminjamans.index', compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjamans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        peminjaman::create($request->all());
        return redirect()->route('peminjamans')->with('success', 'Peminjaman Aset Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjamans = Peminjaman::findOrFail($id);
        return view('peminjamans.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjamans = Peminjaman::findOrFail($id);
        return view('peminjamans.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peminjamans = Peminjaman::findOrFail($id);
        $peminjamans->update($request->all());
        return redirect()->route('peminjamans')->with('success', 'Peminjaman Aset Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peminjamans = Peminjaman::findOrFail($id);
        $peminjamans->delete();
        return redirect()->route('peminjamans')->with('success', 'Peminjaman Aset Berhasil Dihapus');
    }
}

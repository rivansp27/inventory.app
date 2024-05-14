<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class barangController extends Controller
{
    public function index(): View
    {
        $barang = barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create(): View
    {
        
        return view('barang.create');

    }

    public function store(Request $request): RedirectResponse
    {
        // Validasi input dari form
        $request->validate([
            'id' => 'required|numeric',
            'kode_barang' => 'required|unique:barang,kode_barang',
            'nama_barang' => 'required',
            'unit' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'jenis' => 'required',
            'harga_satuan' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        // Simpan data barang baru
        barang::create($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil ditambahkan.');
    }

    public function show(barang $barang): View
    {
        return view('barang.show', compact('barang'));
    }

    public function edit(barang $barang): View
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, barang $barang): RedirectResponse
    {
        // Validasi input dari form
        $request->validate([
            'id' => 'required|numeric',
            'nama_barang' => 'required',
            'unit' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'jenis' => 'required',
            'harga_satuan' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        // Update data barang
        $barang->update($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(barang $barang): RedirectResponse
    {
        // Hapus data barang
        $barang->delete();

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil dihapus.');
    }
}

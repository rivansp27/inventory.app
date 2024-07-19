<?php

namespace App\Http\Controllers;

use App\Models\penerima_barang;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class penerima_barangController extends Controller
{
    public function index(): View
    {
        $penerima_barang = penerima_barang::all();
        return view('penerima_barang.index', compact('penerima_barang'));
    }

    public function create(): View
    {
        return view('penerima_barang.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validasi input dari form
        $request->validate([
            'id_penerimaan' => 'required|unique:penerima_barang,id_penerimaan',
            'tgl_penyimpanan' => 'required|date',
            'alamat' => 'required',
            'kode_barang' => 'required',
            'kuantity' => 'required|numeric',
            
        ]);

        // Simpan data penerima_barang baru
        penerima_barang::create($request->all());

        return redirect()->route('penerima_barang.index')
            ->with('success', 'penerima_barang berhasil ditambahkan.');
    }

    public function show(penerima_barang $penerima_barang): View
    {
        return view('penerima_barang.show', compact('penerima_barang'));
    }

    public function edit(penerima_barang $penerima_barang): View
    {
        return view('penerima_barang.edit', compact('penerima_barang'));
    }

    public function update(Request $request, penerima_barang $penerima_barang): RedirectResponse
    {
        // Validasi input dari form
        $request->validate([
            'id_penerima_barang' => 'required',
            'tgl_penyimpanan' => 'required|date',
            'alamat' => 'required',
            'kode_barang' => 'required|numeric',
            'kuantity' => 'required',
        ]);

        // Update data penerima_barang
        $penerima_barang->update($request->all());

        return redirect()->route('penerima_barang.index')
            ->with('success', 'penerima_barang berhasil diperbarui.');
    }

    public function destroy(penerima_barang $penerima_barang): RedirectResponse
    {
        // Hapus data penerima_barang
        $penerima_barang->delete();

        return redirect()->route('penerima_barang.index')
            ->with('success', 'penerima_barang berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class supplierController extends Controller
{
    public function index(): View
    {
        $supplier = supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    public function create(): View
    {
        return view('supplier.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validasi input dari form
        $request->validate([
            'id' => 'required|numeric',
            'kode_supplier' => 'required|unique:supplier,kode_supplier',
            'nama_supplier' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
    
        ]);

        // Simpan data supplier baru
        supplier::create($request->all());

        return redirect()->route('supplier.index')
            ->with('success', 'supplier berhasil ditambahkan.');
    }

    public function show(supplier $supplier): View
    {
        return view('supplier.show', compact('supplier'));
    }

    public function edit(supplier $supplier): View
    {
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, supplier $supplier): RedirectResponse
    {
        // Validasi input dari form
        $request->validate([
            'id' => 'required|numeric',
            'kode_supplier' => 'required|unique:supplier,kode_supplier',
            'nama_supplier' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        
        ]);

        // Update data supplier
        $supplier->update($request->all());

        return redirect()->route('supplier.index')
            ->with('success', 'supplier berhasil diperbarui.');
    }

    public function destroy(supplier $supplier): RedirectResponse
    {
        // Hapus data supplier
        $supplier->delete();

        return redirect()->route('supplier.index')
            ->with('success', 'supplier berhasil dihapus.');
    }
}

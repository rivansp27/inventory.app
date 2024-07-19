@extends('home')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Daftar Barang</div>
                <div class="card-body">
                    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

                    @if ($barang->isEmpty())
                        <div class="alert alert-danger">
                            Data barang tidak tersedia.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col">Warna</th>
                                        <th scope="col">Jenis</th>
                                        <th scope="col">Harga Satuan</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->kode_barang }}</td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->unit }}</td>
                                            <td>{{ $item->ukuran }}</td>
                                            <td>{{ $item->warna }}</td>
                                            <td>{{ $item->jenis }}</td>
                                            <td>{{ $item->harga_satuan }}</td>
                                            <td>{{ $item->stok }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('barang.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                                <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('barang.destroy', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

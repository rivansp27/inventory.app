<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: white">
<div class="container">
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
                        <table class="table">
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
                                        <td>{{ ++$index }}</td>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

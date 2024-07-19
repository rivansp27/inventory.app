@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penerima Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Daftar Penerima Barang</div>

                <div class="card-body">
                    <a href="{{ route('penerima_barang.create') }}" class="btn btn-primary mb-3">Tambah Penerima Barang</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID Penerimaan</th>
                                <th scope="col">Tanggal Penyimpanan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Kuantitas</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($penerima_barang as $item)
                                <tr>
                                    <td>{{ $item->id_penerimaan }}</td>
                                    <td>{{ $item->tgl_penyimpanan }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->kuantity }}</td>
                                    <td>
                                        <a href="{{ route('penerima_barang.show', $item->id_penerimaan) }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('penerima_barang.edit', $item->id_penerimaan) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('penerima_barang.destroy', $item->id_penerimaan) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus penerima barang ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection

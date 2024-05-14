<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Daftar supplier</div>

                <div class="card-body">
                    <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">Tambah supplier</a>

                    @if ($supplier->isEmpty())
                        <div class="alert alert-danger">
                            Data supplier tidak tersedia.
                        </div>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode supplier</th>
                                    <th scope="col">Nama supplier</th>
                                    <th scope="col">Telpon</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($supplier as $index => $item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item->kode_supplier }}</td>
                                        <td>{{ $item->nama_supplier }}</td>
                                        <td>{{ $item->telepon }}</td>
                                        <td>{{ $item->alamat }}</td>

                                        <td class="text-center">
                                            <a href="{{ route('supplier.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                            <a href="{{ route('supplier.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('supplier.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus supplier ini?')">Hapus</button>
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

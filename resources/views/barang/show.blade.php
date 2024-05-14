<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Detail Barang</div>

                <div class="card-body">
                <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <p>{{ $barang->id }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <p>{{ $barang->kode_barang }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <p>{{ $barang->nama_barang }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <p>{{ $barang->unit }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Ukuran</label>
                        <p>{{ $barang->ukuran }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="warna" class="form-label">Warna</label>
                        <p>{{ $barang->warna }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <p>{{ $barang->jenis }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                        <p>{{ $barang->harga_satuan }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <p>{{ $barang->stok }}</p>
                    </div>
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

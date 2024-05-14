<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Detail supplier</div>

<div class="card-body">
<div class="mb-3">
        <label for="id" class="form-label">id</label>
        <p>{{ $supplier->id }}</p>
    </div>
    <div class="mb-3">
        <label for="kode_supplier" class="form-label">Kode supplier</label>
        <p>{{ $supplier->kode_supplier }}</p>
    </div>
    <div class="mb-3">
        <label for="nama_supplier" class="form-label">Nama supplier</label>
        <p>{{ $supplier->nama_supplier }}</p>
    </div>
    <div class="mb-3">
        <label for="telepon" class="form-label">telepon</label>
        <p>{{ $supplier->telepon }}</p>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <p>{{ $supplier->alamat }}</p>
    </div>
    <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

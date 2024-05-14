<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah supplier</div>

                <div class="card-body">
                    <form action="{{ route('supplier.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="id" class="form-label">id</label>
                            <input type="int" class="form-control" id="id" name="id" required>
                        </div>
                        <div class="mb-3">
                            <label for="kode_supplier" class="form-label">Kode supplier</label>
                            <input type="int" class="form-control" id="kode_supplier" name="kode_supplier" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_supplier" class="form-label">Nama supplier</label>
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">telepon</label>
                            <input type="int" class="form-control" id="telepon" name="telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

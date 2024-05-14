<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Penerima Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah Penerima Barang</div>

                <div class="card-body">
                    <form action="{{ route('penerima_barang.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="id_penerima" class="form-label">ID Penerima</label>
                            <input type="text" class="form-control" id="id_penerima" name="id_penerima" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_penyimpanan" class="form-label">Tanggal Penyimpanan</label>
                            <input type="date" class="form-control" id="tgl_penyimpanan" name="tgl_penyimpanan" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
                        </div>
                        <div class="mb-3">
                            <label for="kuantity" class="form-label">Kuantitas</label>
                            <input type="number" class="form-control" id="kuantity" name="kuantity" required>
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

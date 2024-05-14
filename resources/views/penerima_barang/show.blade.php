<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Penerima Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Detail Penerima Barang</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="id_penerima" class="form-label">ID Penerima</label>
                        <input type="text" class="form-control" id="id_penerima" value="{{ $penerima_barang->id_penerima }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_penyimpanan" class="form-label">Tanggal Penyimpanan</label>
                        <input type="text" class="form-control" id="tgl_penyimpanan" value="{{ $penerima_barang->tgl_penyimpanan }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" value="{{ $penerima_barang->alamat }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" value="{{ $penerima_barang->kode_barang }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="kuantity" class="form-label">Kuantitas</label>
                        <input type="text" class="form-control" id="kuantity" value="{{ $penerima_barang->kuantity }}" readonly>
                    </div>
                    <a href="{{ route('penerima_barang.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

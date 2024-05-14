<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'id',
        'kode_barang',
        'nama_barang',
        'unit',
        'ukuran',
        'warna',
        'jenis',
        'harga_satuan',
        'stok',
    ];

}
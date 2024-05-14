<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerima_barang extends Model
{
    use HasFactory;

    protected $table = 'penerima_barang';

    protected $fillable = [
        'id_penerimaan',
        'tgl_penyimpanan',
        'alamat',
        'kode_barang',
        'kuantity',
        
    ];

}
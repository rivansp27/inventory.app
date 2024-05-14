<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran_barang extends Model
{
    use HasFactory;

    protected $table = 'pengeluaran_barang';

    protected $fillable = [
        'id_pengeluaran',
        'tgl_keluar',
        'tujuan',
        'kuantity',
        'kode_barang',
        
    ];

}
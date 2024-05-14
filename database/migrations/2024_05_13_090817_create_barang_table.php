<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_barang')->unique(); // PK
            $table->string('nama_barang', 150);
            $table->enum('unit', ['Pcs','Buah','Lembar']);
            $table->string('ukuran', 150);
            $table->string('warna', 150);
            $table->string('jenis', 150);
            $table->integer('harga_satuan');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};

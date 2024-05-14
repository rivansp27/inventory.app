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
        Schema::create('pengeluaran_barang', function (Blueprint $table) {
            $table->bigIncrements('id_pengeluaran'); // PK
            $table->date('tgl_keluar')->nullable(); // Tambahkan kolom tgl_keluar
            $table->string('tujuan', 150);
            $table->integer('kuantity');
            $table->unsignedBigInteger('kode_barang'); // FK
            $table->timestamps();
            
            // Define foreign key constraint
            $table->foreign('kode_barang')->references('id')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluaran_barang');
    }
};

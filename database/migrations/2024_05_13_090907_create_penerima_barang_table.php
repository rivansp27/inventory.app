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
        Schema::create('penerima_barang', function (Blueprint $table) {
            $table->bigIncrements('id_penerimaan'); // PK
            $table->date('tgl_penyimpanan')->nullable(); 
            $table->text('alamat');
            $table->unsignedBigInteger('kode_barang'); // FK
            $table->integer('kuantity');
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
        Schema::dropIfExists('penerima_barang');
    }
};
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
            // Ini adalah primary key yang akan menyimpan ID
            $table->id();
            // Ini adalah kolom untuk menyimpan nama barang dengan panjang maksimal 255 karakter
            $table->string('nama_barang',   255);
            // Ini adalah kolom untuk menyimpan keterangan
            $table->text('keterangan');
            // Ini adalah kolom untuk menyimpan gambar dengan panjang maksimal 255 karakter
            $table->string('gambar', 255);
            // Ini adalah kolom untuk menyimpan status dengan panjang maksimal 100 karakter
            $table->string('status', 100);
            //ini adalah kolom timestamp untuk createdAt dan updatedAt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};

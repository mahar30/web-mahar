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
        Schema::create('transaksi', function (Blueprint $table) {
            // Ini adalah primary key yang akan menyimpan ID
            $table->id();
            // Ini adalah foreign key yang mengacu pada kolom 'user_id' pada tabel 'users' dengan penghapusan data 'cascade'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // Ini adalah kolom untuk menyimpan kode transaksi dengan panjang maksimal 100 karakter
            $table->string('kode_transaksi', 100);
            // Ini adalah kolom untuk menyimpan total harga dalam bentuk bilangan bulat (integer)
            $table->integer('total_harga');
            // Ini adalah kolom untuk menyimpan nama pembeli dengan panjang maksimal 255 karakter
            $table->string('nama_pembeli', 255);
            // Ini adalah kolom untuk menyimpan alamat pembeli dengan panjang maksimal 255 karakter
            $table->string('alamat_pembeli', 255);
            // Ini adalah kolom untuk menyimpan nomor WhatsApp pembeli dengan panjang maksimal 255 karakter
            $table->string('no_wa_pembeli', 255);
            // Ini adalah kolom untuk menyimpan tipe pembayaran dengan panjang maksimal 255 karakter
            $table->string('tipe_pembayaran', 255);
            // Ini adalah kolom untuk menyimpan total pembelian dengan panjang maksimal 255 karakter
            $table->string('total_pembelian', 255);
            // Ini adalah kolom untuk menyimpan status transaksi dengan panjang maksimal 100 karakter
            $table->string('status', 100);
            // Ini adalah timestamp untuk createdAt dan updatedAt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};

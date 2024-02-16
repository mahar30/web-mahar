<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function Livewire\on;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detailtransaksi', function (Blueprint $table) {
            // Ini adalah primary key yang akan menyimpan ID
            $table->id();
            // Ini adalah foreign key yang mengacu pada kolom 'transaksi_id' pada tabel 'transaksi' dengan penghapusan data 'cascade'
            $table->foreignId('transaksi_id')->constrained('transaksi')->onDelete('cascade');
            // Ini adalah kolom untuk menyimpan jumlah dalam bentuk bilangan bulat (integer)
            $table->integer('jumlah');
            // Ini adalah kolom untuk menyimpan ukuran dengan panjang maksimal 100 karakter
            $table->string('ukuran', 100);
            // Ini adalah kolom untuk menyimpan nama barang dengan panjang maksimal 100 karakter
            $table->string('nama_barang', 100);
            // Ini adalah kolom untuk menyimpan total dalam bentuk bilangan bulat (integer)
            $table->integer('total');
            // Ini adalah kolom untuk menyimpan nama file foto barang dengan panjang maksimal 255 karakter
            $table->string('foto_barang', 255);
            // Ini adalah timestamp untuk createdAt dan updatedAt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailtransaksis');
    }
};

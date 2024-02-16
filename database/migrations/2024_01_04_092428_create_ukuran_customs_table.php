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
        // Membuat tabel baru dengan nama 'ukuran_custom'
        Schema::create('ukuran_custom', function (Blueprint $table) {
            // Menambahkan kolom 'id' sebagai primary key
            $table->id();

            // Menambahkan kolom 'barang_id' sebagai foreign key yang merujuk ke tabel 'barang'
            // Jika data di tabel 'barang' dihapus, maka data yang berhubungan di tabel ini juga akan dihapus (onDelete('cascade'))
            $table->foreignId('barang_id')->constrained('barang')->onDelete('cascade');

            // Menambahkan kolom 'panjang' dengan tipe data integer
            $table->integer('panjang');

            // Menambahkan kolom 'lebar' dengan tipe data integer
            $table->integer('lebar');

            // Menambahkan kolom 'tinggi' dengan tipe data integer
            $table->integer('tinggi');

            // Menambahkan kolom 'harga' dengan tipe data integer
            $table->integer('harga');

            // Menambahkan kolom 'created_at' dan 'updated_at' untuk mencatat waktu pembuatan dan perubahan data
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukuran_customs');
    }
};

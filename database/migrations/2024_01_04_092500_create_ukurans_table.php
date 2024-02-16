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
        Schema::create('ukuran', function (Blueprint $table) {
            // Ini adalah primary key yang akan menyimpan ID
            $table->id();
            // Ini adalah foreign key yang mengacu pada kolom 'barang_id' pada tabel 'barang' dengan penghapusan data 'cascade'
            $table->foreignId('barang_id')->constrained('barang')->onDelete('cascade');
            // Ini adalah kolom untuk menyimpan ukuran dengan panjang maksimal 50 karakter
            $table->string('ukuran', 50);
            // Ini adalah kolom untuk menyimpan deskripsi ukuran
            $table->text('deskripsi');
            // Ini adalah kolom untuk menyimpan stock
            $table->integer('stock');
            // Ini adalah kolom untuk menyimpan harga dalam bentuk bilangan bulat (integer)
            $table->integer('harga');
            // Ini adalah timestamp untuk createdAt dan updatedAt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukurans');
    }
};

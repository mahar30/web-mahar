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
        Schema::create('keranjang', function (Blueprint $table) {

            // Ini adalah primary key yang akan menyimpan ID
            $table->id();
            // Ini adalah foreign key yang mengacu pada kolom 'user_id' pada tabel 'user' dengan penghapusan data 'cascade'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // Ini adalah foreign key yang mengacu pada kolom 'ukuran_id' pada tabel 'ukuran' dengan penghapusan data 'cascade'
            $table->foreignId('ukuran_id')->nullable()->constrained('ukuran')->onDelete('cascade');
            // Ini adalah foreign key yang mengacu pada kolom 'ukuran_custom_id' pada tabel 'ukuran_custom' dengan penghapusan data 'cascade'
            $table->foreignId('ukuran_custom_id')->nullable()->constrained('ukuran_custom')->onDelete('cascade');
            // Ini adalah foreign key yang mengacu pada kolom 'barang_id' pada tabel 'barang' dengan penghapusan data 'cascade'
            $table->foreignId('barang_id')->constrained('barang')->onDelete('cascade');
            // Ini adalah kolom untuk menyimpan keterangan dalam bentuk teks
            $table->text('keterangan');
            // Ini adalah kolom untuk menyimpan jumlah dalam bentuk bilangan bulat (integer)
            $table->integer('jumlah');
            // Ini adalah kolom untuk tipe ukuran dengan enum 'standar' dan 'custom'
            $table->enum('tipe_ukuran', ['standar', 'custom']);
            // Ini adalah timestamp untuk createdAt dan updatedAt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};

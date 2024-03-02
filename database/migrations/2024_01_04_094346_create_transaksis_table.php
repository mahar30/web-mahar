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
            // Ini adalah kolom untuk menyimpan total harga dalam bentuk bilangan bulat (integer)
            $table->integer('total_harga');
            // Ini adalah kolom untuk menyimpan status transaksi dengan panjang maksimal 100 karakter
            $table->enum('status', ['Dalam Proses', 'Dikerjakan', 'Selesai'])->default('Dalam Proses');
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

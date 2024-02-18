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
        Schema::create('pembayaran', function (Blueprint $table) {
            // Ini adalah primary key yang akan menyimpan ID
            $table->id();
            // Ini adalah foreign key yang mengacu pada kolom 'user_id' pada tabel 'user' dengan penghapusan data 'cascade'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // Ini adalah foreign key yang mengacu pada kolom 'rekening_id' pada tabel 'rekening' dengan penghapusan data 'cascade'
            $table->foreignId('rekening_id')->constrained('rekening')->onDelete('cascade');
            // Ini adalah foreign key yang mengacu pada kolom 'transaksi_id' pada tabel 'transaksi' dengan penghapusan data 'cascade'
            $table->foreignId('transaksi_id')->constrained('transaksi')->onDelete('cascade');
            // Ini adalah kolom untuk menyimpan nama file foto dengan panjang maksimal 255 karakter
            $table->string('foto', 255);
            // ini adalah kolom untuk menyimpan status pembayaran
            $table->enum('status', ['Proses Verifikasi', 'Disetujui', 'Ditolak'])->default('Proses Verifikasi');
            // Ini adalah timestamp untuk createdAt dan updatedAt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};

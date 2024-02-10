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
        Schema::create('rekening', function (Blueprint $table) {
            // Ini adalah primary key yang akan menyimpan ID
            $table->id();
            // Ini adalah kolom untuk menyimpan nama bank dengan panjang maksimal 100 karakter
            $table->string('nama_bank', 100);
            // Ini adalah kolom untuk menyimpan nomor rekening dengan panjang maksimal 20 karakter
            $table->string('no_rekening', 20);
            // Ini adalah kolom untuk menyimpan nama rekening dengan panjang maksimal 255 karakter
            $table->string('nama_rekening', 255);
            // Ini adalah timestamp untuk createdAt dan updatedAt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekenings');
    }
};

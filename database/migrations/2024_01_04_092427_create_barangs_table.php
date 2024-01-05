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
            $table->id();
            //Field Nama_Barang, keterangan, gambar, status, total_terjual, created_at, updated_at
            $table->string('nama_barang',   255);
            $table->text('keterangan');
            $table->string('gambar', 255);
            $table->string('status', 100);
            $table->integer('total_terjual', 255);
            $table->dateTime('creadted_at');
            $table->dateTime('updated_at');
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

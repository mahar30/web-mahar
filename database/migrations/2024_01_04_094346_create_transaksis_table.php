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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            //Field kode_transaksi, total_harga, nama_pembeli, alamat_pembeli, no_wa_pembeli, tipe_pembayaran, total_pembelian, status, created_at, updated_at
            $table->string('kode_transaksi', 100);
            $table->decimal('total_harga');
            $table->string('nama_pembeli', 255);
            $table->string('alamat_pembeli', 255);
            $table->string('no_wa_pembeli', 255);
            $table->string('tipe_pembayaran', 255);
            $table->string('total_pembelian', 255);
            $table->string('status', 100);
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
        Schema::dropIfExists('transaksis');
    }
};

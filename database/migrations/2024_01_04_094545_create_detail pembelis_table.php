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
        Schema::create('detail pembeli', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            //Field alamat, no_wa, tanggal_transaksi_trakhir, created_at, updated_at
            $table->string('alamat', 255);
            $table->string('no_wa', 15);
            $table->dateTime('tanggal_transaksi_trakhir');
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
        Schema::dropIfExists('detailpembelis');
    }
};

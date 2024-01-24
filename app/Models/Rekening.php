<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "rekening";
    
    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'nama_bank', // Ini adalah nama bank yang terkait dengan rekening
        'no_rekening', // Ini adalah nomor rekening bank
        'nama_rekening', // Ini adalah nama pemilik rekening bank
    ];
    
    // Mendefinisikan hubungan "hasMany" dengan model Pembayaran
    // Ini mengindikasikan bahwa satu rekening memiliki banyak pembayaran
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}


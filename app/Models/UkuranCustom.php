<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UkuranCustom extends Model
{
    use HasFactory;

    // Mendefinisikan nama tabel terkait
    protected $table = 'ukuran_custom';

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'barang_id', // Ini adalah id barang yang terkait dengan ukuran
        'panjang', // Ini adalah panjang ukuran
        'lebar', // Ini adalah lebar ukuran
        'tinggi', // Ini adalah tinggi ukuran
        'harga', // Ini adalah harga ukuran
    ];

    // Mendefinisikan hubungan "belongsTo" dengan model Barang
    // Ini mengindikasikan bahwa satu ukuran terkait dengan satu barang (Barang)
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    // Mendefinisikan hubungan "hasMany" dengan model Keranjang
    // Ini mengindikasikan bahwa satu ukuran dapat terkait dengan banyak keranjang
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }
}

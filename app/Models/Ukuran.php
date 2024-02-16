<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "ukuran";

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'barang_id', // Ini adalah id barang yang terkait dengan ukuran
        'ukuran', // Ini adalah nama ukuran
        'harga', // Ini adalah harga ukuran

    ];

    // Mendefinisikan hubungan "hasMany" dengan model Keranjang
    // Ini mengindikasikan bahwa satu ukuran dapat terkait dengan banyak keranjang
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }

    // Mendefinisikan hubungan "belongsTo" dengan model Barang
    // Ini mengindikasikan bahwa satu ukuran terkait dengan satu barang (Barang)
    public function barangs()
    {
        return $this->belongsTo(Barang::class);
    }
}

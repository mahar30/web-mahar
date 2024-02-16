<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailtransaksi extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "detailtransaksi";

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'transaksi_id', // Ini adalah ID dari transaksi yang terkait dengan detail transaksi
        'nama_barang', // Ini adalah nama barang dalam detail transaksi
        'jumlah', // Ini adalah jumlah barang dalam detail transaksi
        'ukuran', // Ini adalah ukuran dari barang dalam detail transaksi
        'harga', // Ini adalah harga dari barang dalam detail transaksi
    ];

    // Mendefinisikan hubungan "belongsTo" dengan model Transaksi
    // Ini mengindikasikan bahwa setiap detail transaksi dimiliki oleh satu transaksi (Transaksi)
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}

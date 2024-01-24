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
        'barang_id', // Ini adalah ID dari barang yang terkait dengan detail transaksi
        'ukuran', // Ini adalah ukuran dari barang dalam detail transaksi
        'jumlah', // Ini adalah jumlah barang dalam detail transaksi
        'nama_barang', // Ini adalah nama barang dalam detail transaksi
        'total', // Ini adalah total harga barang dalam detail transaksi
        'foto_barang', // Ini adalah nama file foto barang dalam detail transaksi
    ];

    // Mendefinisikan hubungan "belongsTo" dengan model Transaksi
    // Ini mengindikasikan bahwa setiap detail transaksi dimiliki oleh satu transaksi (Transaksi)
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "keranjang";

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'barang_id', // Ini adalah ID dari barang yang ada dalam keranjang
        'user_id', // Ini adalah ID dari pengguna yang memiliki keranjang
        'ukuran_id', // Ini adalah ID dari ukuran barang dalam keranjang
        'ukuran_custom_id', // Ini adalah ID dari ukuran custom barang dalam keranjang
        'jumlah', // Ini adalah jumlah barang dalam keranjang
        'status', // Ini adalah status keranjang (misalnya, dalam proses pembayaran)
    ];

    // Mendefinisikan hubungan "belongsTo" dengan model Barang
    // Ini mengindikasikan bahwa setiap keranjang dimiliki oleh satu barang (Barang)
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    // Mendefinisikan hubungan "belongsTo" dengan model Ukuran
    // Ini mengindikasikan bahwa setiap keranjang terkait dengan satu ukuran (Ukuran)
    public function ukuran()
    {
        return $this->belongsTo(Ukuran::class);
    }

    // Mendefinisikan hubungan "belongsTo" dengan model User
    // Ini mengindikasikan bahwa setiap keranjang dimiliki oleh satu pengguna (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mendefinisikan hubungan "belongsTo" dengan model UkuranCustom
    // Ini mengindikasikan bahwa setiap keranjang terkait dengan satu ukuran custom (UkuranCustom)
    public function ukuran_custom()
    {
        return $this->belongsTo(UkuranCustom::class);
    }
}

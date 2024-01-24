<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "pembayaran";

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'transaksi_id', // Ini adalah ID dari transaksi yang terkait dengan pembayaran
        'user_id', // Ini adalah ID dari pengguna yang melakukan pembayaran
        'rekening_id', // Ini adalah ID dari rekening yang digunakan untuk pembayaran
        'no_rekening', // Ini adalah nomor rekening yang digunakan untuk pembayaran
        'foto', // Ini adalah nama file foto atau bukti pembayaran
        'total', // Ini adalah total pembayaran
        'nama_rekening', // Ini adalah nama pemilik rekening yang digunakan untuk pembayaran
        'status', // Ini adalah status pembayaran (misalnya, berhasil atau belum)
    ];

    // Mendefinisikan hubungan "belongsTo" dengan model Rekening
    // Ini mengindikasikan bahwa setiap pembayaran terkait dengan satu rekening (Rekening)
    public function rekening()
    {
        return $this->belongsTo(Rekening::class);
    }

    // Mendefinisikan hubungan "belongsTo" dengan model User
    // Ini mengindikasikan bahwa setiap pembayaran dimiliki oleh satu pengguna (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mendefinisikan hubungan "belongsTo" dengan model Transaksi
    // Ini mengindikasikan bahwa setiap pembayaran terkait dengan satu transaksi (Transaksi)
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}

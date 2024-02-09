<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "transaksi";

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'user_id', // Ini adalah ID dari pengguna yang melakukan transaksi
        'kode_transaksi', // Ini adalah kode unik transaksi
        'total_harga', // Ini adalah total harga transaksi
        'no_wa_pembeli', // Ini adalah nomor WhatsApp pembeli dalam transaksi
        'tipe_pembayaran', // Ini adalah tipe pembayaran (misalnya, transfer bank atau kartu kredit)
        'total_pembelian', // Ini adalah total pembelian dalam transaksi
        'status', // Ini adalah status transaksi (misalnya, dalam proses atau berhasil)
    ];

    // Mendefinisikan hubungan "belongsTo" dengan model User
    // Ini mengindikasikan bahwa setiap transaksi dimiliki oleh satu pengguna (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mendefinisikan hubungan "hasMany" dengan model Pembayaran
    // Ini mengindikasikan bahwa satu transaksi dapat memiliki banyak pembayaran
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }

    // Mendefinisikan hubungan "hasMany" dengan model Detailtransaksi
    // Ini mengindikasikan bahwa satu transaksi dapat memiliki banyak detail transaksi
    public function detailtransaksi()
    {
        return $this->hasMany(Detailtransaksi::class);
    }

    
    
}

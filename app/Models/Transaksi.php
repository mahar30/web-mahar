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
        'total_harga', // Ini adalah total harga transaksi
        'tipe_pembayaran', // Ini adalah tipe pembayaran (misalnya, transfer bank atau kartu kredit)
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

    public function getDetailtransaksiSummaryAttribute()
    {
        return $this->detailtransaksi->map(function ($detail) {
            return "ukuran: {$detail->ukuran}, <br> Jumlah: {$detail->jumlah}, <br> Nama Barang: {$detail->nama_barang}, <br> Total: {$detail->total}, <br> Foto Barang: {$detail->foto_barang}";
        })->join('; <br>');
    }

    
    
}

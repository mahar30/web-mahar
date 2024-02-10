<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailpembeli extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "detailpembeli";

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'user_id', // Ini adalah ID dari pengguna yang terkait dengan detail pembeli
        'alamat', // Ini adalah alamat dari pembeli
        'no_wa', // Ini adalah nomor WhatsApp dari pembeli
        'tanggaltransaksi_teraakhir', // Ini adalah tanggal transaksi terakhir dalam format datetime
    ];

    // Mendefinisikan tipe data untuk atribut 'tanggal_transaksi_teraakhir' sebagai datetime
    protected $casts = [
        'tanggaltransaksi_teraakhir' => 'date',
    ];

    // Mendefinisikan hubungan "belongsTo" dengan model User
    // Ini mengindikasikan bahwa setiap detail pembeli dimiliki oleh satu pengguna (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

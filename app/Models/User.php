<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // Atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'name', // Ini adalah nama pengguna
        'email', // Ini adalah alamat email pengguna
        'password', // Ini adalah password pengguna (dihash)
        'role_id', // Ini adalah ID peran (Role) dari pengguna
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // Atribut yang tersembunyi (hidden)
    protected $hidden = [
        'password', // Ini adalah password (disembunyikan)
        'remember_token', // Ini adalah token yang digunakan untuk mengingat sesi
        'two_factor_recovery_codes', // Ini adalah kode pemulihan dua faktor
        'two_factor_secret', // Ini adalah rahasia dua faktor
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    // Casts (pengubahan tipe data) untuk atribut email_verified_at
    protected $casts = [
        'email_verified_at' => 'datetime', // Atribut ini diubah menjadi tipe data datetime
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    // Atribut yang ditambahkan (appends)
    protected $appends = [
        'profile_photo_url', // Ini adalah URL foto profil
    ];

    // Hubungan "hasOne" dengan model Keranjang
    public function keranjang()
    {
        return $this->hasOne(Keranjang::class);
    }

    // Hubungan "hasOne" dengan model Detailpembeli
    public function detailpembeli()
    {
        return $this->hasOne(Detailpembeli::class);
    }

    // Hubungan "hasMany" dengan model Pembayaran
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }

    // Hubungan "hasMany" dengan model Transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    // Hubungan "belongsTo" dengan model Roles
    // Ini mengindikasikan bahwa satu pengguna (User) memiliki satu peran (Role)
    // Parameter kedua adalah nama kolom yang menghubungkan pengguna dengan peran (dalam hal ini, 'roles_id')
    public function roles()
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }
}

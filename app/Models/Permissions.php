<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "permissions";

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'name', // Ini adalah nama izin atau permission
    ];

    // Mendefinisikan hubungan "belongsToMany" dengan model Roles
    // Ini mengindikasikan bahwa satu izin dapat dimiliki oleh banyak peran (Roles)
    // Parameter kedua adalah tabel pivot yang digunakan untuk menghubungkan peran dan izin
    // Parameter ketiga adalah kolom ID peran dalam tabel pivot
    // Parameter keempat adalah kolom ID izin dalam tabel pivot
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'role_permissions', 'permission_id', 'role_id');
    }

}

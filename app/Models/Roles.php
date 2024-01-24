<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = "roles";

    // Mendefinisikan atribut yang dapat diisi (fillable) oleh pengguna
    protected $fillable = [
        'name', // Ini adalah nama peran atau role
    ];

    // Mendefinisikan hubungan "belongsToMany" dengan model Permissions
    // Ini mengindikasikan bahwa satu peran dapat memiliki banyak izin atau permissions
    // Parameter kedua adalah model Permissions yang terkait
    // Parameter ketiga adalah tabel pivot yang digunakan untuk menghubungkan peran dan izin
    // Parameter keempat adalah kolom ID peran dalam tabel pivot
    // Parameter kelima adalah kolom ID izin dalam tabel pivot
    public function permissions()
    {
        return $this->belongsToMany(Permissions::class, 'roles_permissions', 'role_id', 'permission_id');
    }

    // Mendefinisikan hubungan "hasMany" dengan model User
    // Ini mengindikasikan bahwa satu peran dapat memiliki banyak pengguna (User)
    // Parameter kedua adalah kolom ID peran dalam tabel User yang digunakan untuk menghubungkan peran dan pengguna
    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}

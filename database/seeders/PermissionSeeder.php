<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Create User',
            'Read User',
            'Update User',
            'Delete User',
            'Create Role',
            'Read Role',
            'Update Role',
            'Delete Role',
            'Create Permission',
            'Read Permission',
            'Update Permission',
            'Delete Permission',
            'Create Barang',
            'Read Barang',
            'Update Barang',
            'Delete Barang',
            'Create Ukuran',
            'Read Ukuran',
            'Update Ukuran',
            'Delete Ukuran',
            'Create Ukuran Custom',
            'Read Ukuran Custom',
            'Update Ukuran Custom',
            'Delete Ukuran Custom',
            'Create Keranjang',
            'Read Keranjang',
            'Update Keranjang',
            'Delete Keranjang',
            'Create Transaksi',
            'Read Transaksi',
            'Update Transaksi',
            'Delete Transaksi',
            'Create Pembayaran',
            'Read Pembayaran',
            'Update Pembayaran',
            'Delete Pembayaran',
            'Create Rekening',
            'Read Rekening',
            'Update Rekening',
            'Delete Rekening',
            'Create Detail Pembeli',
            'Read Detail Pembeli',
            'Update Detail Pembeli',
            'Delete Detail Pembeli',
        ];

        foreach ($permissions as $permission) {
            Permissions::create([
                'name' => $permission,
            ]);
        }
    }
}

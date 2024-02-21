<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Jetstream\Rules\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesRolesAndPermissionsSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(BarangSeeder::class);
        // $this->call(UkuranSeeder::class);
        // $this->call(RekeningSeeder::class);
        // $this->call(UkuranCustomSeeder::class);
        // $this->call(KeranjangSeeder::class);
        // $this->call(TransaksiSeeder::class);
        // $this->call(PembayaranSeeder::class);
        // $this->call(DetailPembeliSeeder::class);
        // $this->call(DetailtransaksiSeeder::class);
    }
}

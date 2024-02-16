<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::create(['name' => 'Admin']);
        Roles::create(['name' => 'Owner']);
        Roles::create(['name' => 'Pelanggan']);
    }
}

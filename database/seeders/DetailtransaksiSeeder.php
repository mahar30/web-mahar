<?php

namespace Database\Seeders;

use App\Models\Detailtransaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailtransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detailtransaksi::factory()->count(10)->create();
    }
}

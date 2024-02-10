<?php

namespace Database\Seeders;

use App\Models\Ukuran;
use Illuminate\Database\Seeder;

class UkuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Menggunakan factory untuk membuat data dummy
        Ukuran::factory(10)->create();
    }
}

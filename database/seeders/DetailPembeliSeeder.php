<?php

namespace Database\Seeders;

use App\Models\Detailpembeli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // Membuat 10 data detail pembeli
            Detailpembeli::factory()->count(10)->create();
    }
}

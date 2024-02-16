<?php

namespace Database\Seeders;

use App\Models\UkuranCustom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UkuranCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UkuranCustom::factory()->count(10)->create();
    }
}

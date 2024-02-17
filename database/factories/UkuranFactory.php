<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ukuran>
 */
class UkuranFactory extends Factory
{
    /**
     * Define the model's default state.    
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barang_id' => Barang::all()->random()->id,
            'ukuran' => $this->faker->randomElement(['Kecil', 'Sedang', 'Besar']),
            'deskripsi' => $this->faker->randomElement(['10cm x 10 cm x 10cm', '20cm x 20 cm x 20cm', '30cm x 30 cm x 30cm']),
            'stock' => $this->faker->randomNumber(2),
            'harga' => $this->faker->randomNumber(6),
        ];
    }
}

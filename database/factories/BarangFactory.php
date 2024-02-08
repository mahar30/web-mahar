<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->name,
            'keterangan' => $this->faker->text,
            'gambar' => 'https://via.placeholder.com/150',
            'status' => $this->faker->randomElement(['tersedia', 'habis']),
            'total_terjual' => $this->faker->randomNumber(2),
        ];
    }
}

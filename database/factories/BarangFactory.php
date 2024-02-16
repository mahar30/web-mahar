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
        $i = 1;
        return [
            'nama_barang' => "Barang-$i",
            'keterangan' => $this->faker->text,
            'stock' => $this->faker->numberBetween(1, 100),
            'gambar' => $this->faker->imageUrl(640, 480),
            'status' => $this->faker->randomElement(['Aktif', 'Nonaktif']),
        ];
        $i++;
    }
}

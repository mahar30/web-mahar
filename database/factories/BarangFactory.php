<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    protected static $counter = 1; // Start counter at 1

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => "Barang-" . static::$counter++,
            'keterangan' => $this->faker->text,
            'gambar' => $this->faker->imageUrl(640, 480),
            'status' => $this->faker->randomElement(['Aktif', 'Tidak Aktif']),
        ];
    }
}

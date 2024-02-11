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
            'gambar' => $this->faker->imageUrl(640, 480), // menghasilkan URL ke gambar acak dengan lebar 640px dan tinggi 480px
            'status' => $this->faker->randomElement(['tersedia', 'habis']),
        ];
    }
}

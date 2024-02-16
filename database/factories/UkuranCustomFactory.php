<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UkuranCustom>
 */
class UkuranCustomFactory extends Factory
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
            'panjang' => $this->faker->randomNumber(2),
            'lebar' => $this->faker->randomNumber(2),
            'tinggi' => $this->faker->randomNumber(2),
            'harga' => $this->faker->randomNumber(6),
        ];
    }
}

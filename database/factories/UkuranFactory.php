<?php

namespace Database\Factories;

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
            'barang_id' => $this->faker->randomNumber(1, 10),
            'ukuran' => $this->faker->randomNumber(1, 10),
            'harga' => $this->faker->randomNumber(1, 10),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Keranjang>
 */
class KeranjangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barang_id' => \App\Models\Barang::all()->random()->id,
            'user_id' => \App\Models\User::all()->random()->id,
            'ukuran_id' => \App\Models\Ukuran::all()->random()->id,
            'jumlah' => $this->faker->randomNumber(),
            'status' => $this->faker->word,
        ];
    }
}

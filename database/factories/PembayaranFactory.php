<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pembayaran>
 */
class PembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber('1', '10'),
            'transaksi_id' => $this->faker->randomNumber('1', '11'),
            'rekening_id' => $this->faker->randomNumber('1', '12'),
            'foto' => $this->faker->word,
            'total' => $this->faker->randomFloat(0, 0, 8),
            'nama_rekening' => $this->faker->word,
            'status' => $this->faker->word,
        ];
    }
}

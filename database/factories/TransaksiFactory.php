<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'total_harga' => $this->faker->randomNumber(),
            'tipe_pembayaran' => $this->faker->randomElement(['tunai', 'non tunai']),// menghasilkan 3 kata acak
            'status' => $this->faker->words(3, true), // menghasilkan 3 kata acak
        ];
    }
}

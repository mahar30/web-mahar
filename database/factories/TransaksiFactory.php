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
            'id' => $this->faker->randomNumber(),
            'user_id' => User::all()->random()->id,
            // 'name' => $this->faker->randomElement(),
            'kode_transaksi' => $this->faker->text(50),
            'total_harga' => $this->faker->randomNumber(),
            'no_wa_pembeli' => $this->faker->text(20),
            'tipe_pembayaran' => $this->faker->text(100),
            'total_pembelian' => $this->faker->randomNumber(),
            'status' => $this->faker->text(100),
        ];
    }
}

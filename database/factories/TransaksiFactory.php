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
            // 'name' => $this->faker->randomElement(),
            'kode_transaksi' => $this->faker->regexify('[A-Za-z0-9]{20}'), // menghasilkan string acak dengan panjang 20
            'total_harga' => $this->faker->randomNumber(),
            'no_wa_pembeli' => $this->faker->e164PhoneNumber, // menghasilkan nomor telepon internasional
            'tipe_pembayaran' => $this->faker->words(3, true), // menghasilkan 3 kata acak
            'total_pembelian' => $this->faker->randomNumber(),
            'status' => $this->faker->words(3, true), // menghasilkan 3 kata acak
        ];
    }
}

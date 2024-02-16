<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detailtransaksi>
 */
class DetailtransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'transaksi_id' => Transaksi::factory(),
            'nama_barang' => $this->faker->word,
            'jumlah' => $this->faker->randomNumber(2),
            'ukuran' => $this->faker->randomElement(['Kecil', 'Sedang', 'Besar']),
            'harga' => $this->faker->randomNumber(6),
        ];
    }
}

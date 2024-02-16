<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'transaksi_id' => \App\Models\Transaksi::all()->random()->id,   
            'ukuran' => $this->faker->word,
            'jumlah' => $this->faker->randomNumber(0),
            'nama_barang' => $this->faker->word,
            'total' => $this->faker->randomNumber(0),
            'foto_barang' =>$this->faker->imageUrl(640, 480),
        ];
    }
}

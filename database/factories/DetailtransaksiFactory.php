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
        $minDetail = 1;
        $maxDetail = 50;

        $totalDetail = 0;
        $detailTransaksi = [];

        while ($totalDetail < $maxDetail) {
            $detailTransaksi[] = [
                'transaksi_id' => function () {
                    return App\Models\Transaksi::all()->random()->id;
                },
                'ukuran' => $this->faker->word,
                'jumlah' => $this->faker->numberBetween($minDetail, 10),
                'total' => $this->faker->randomNumber(0),
            ];

            $totalDetail += $this->faker->numberBetween($minDetail, 10);
        }

        return $detailTransaksi;
    }
}

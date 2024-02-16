<?php

namespace Database\Factories;

use App\Models\Barang;
use App\Models\Ukuran;
use App\Models\UkuranCustom;
use App\Models\User;
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
            'barang_id' => Barang::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'ukuran_id' => Ukuran::all()->random()->id,
            'ukuran_custom_id' => UkuranCustom::all()->random()->id,
            'jumlah' => $this->faker->randomNumber(),
            'status' => $this->faker->randomElement(['Aktif', 'Tidak Aktif']),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailPembeli>
 */
class DetailPembeliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(1, 10),
            'alamat' => $this->faker->address,
            'no_wa' => $this->faker->phoneNumber(),
            'tanggaltransaksi_teraakhir' => date('Y-m-d'),
            
        ];
    }
}

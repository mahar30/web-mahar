<?php

namespace Database\Factories;

use App\Models\User;
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
            'user_id' => User::all()->random()->id,
            'no_wa' => $this->faker->numerify('##########'),
            'alamat' => $this->faker->address(),
            'tanggaltransaksi_teraakhir' => \Carbon\Carbon::now()->startOfDay()->toDateString(),
            
        ];
    }
}

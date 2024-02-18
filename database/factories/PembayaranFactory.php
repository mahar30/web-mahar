<?php

namespace Database\Factories;

use App\Models\Rekening;
use App\Models\Transaksi;
use App\Models\User;
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
            'transaksi_id' => Transaksi::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'rekening_id' => Rekening::all()->random()->id,
            'foto' => $this->faker->imageUrl(640, 480), // menghasilkan URL ke gambar acak dengan lebar 640px dan tinggi 480px
            'status' => $this->faker->randomElement(['Proses Verifikasi', 'Disetujui', 'Ditolak']),
        ];
    }
}

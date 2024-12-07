<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Ambil semua ID kategori dari database
        $kategoriIds = Kategori::pluck('id')->toArray();
        return [
            'kategori_id' => $this->faker->randomElement($kategoriIds),
            'foto_produk' => $this->faker->imageUrl(1080, 1080, 'products', true),
            'nama_produk' => $this->faker->word(),
            'harga' => $this->faker->numberBetween(1000, 100000),
            'berat' => $this->faker->numberBetween(100, 10000),
            'deskripsi' => $this->faker->paragraph(),
        ];
    }
}

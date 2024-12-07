<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = now();
        Kategori::insert([
            ['nama_kategori' => 'Spices', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nama_kategori' => 'Seeds', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nama_kategori' => 'Nuts', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nama_kategori' => 'Special Product', 'created_at' => $timestamp, 'updated_at' => $timestamp]
        ]);
    }
}

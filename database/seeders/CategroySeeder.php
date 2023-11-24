<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategroySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'pakaian',
            'mainan',
            'kendaraan',
            'elektronik',
        ];

        // Loop melalui array kategori dan tambahkan ke database
        foreach ($categories as $categoryName) {
            Category::create(['name' => $categoryName]);
        }
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productNames = [
            'Laptop',
            'Smartphone',
            'Headphones',
            'Camera',
            'Tablet',
            // Tambahkan lebih banyak nama produk sesuai kebutuhan
        ];
        return [
            'category_id'=>mt_rand(1,3),
            'title' => $productNames[array_rand($productNames)],
            'description' => fake()->text(120),
            'price' => fake()->numberBetween(10000, 100000),
            'image' => ''
        ];
    }
}

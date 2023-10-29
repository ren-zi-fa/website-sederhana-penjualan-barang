<?php

namespace Database\Seeders;

use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Electronic',
        ]);
        Category::create([
            'name' => 'Action',
        ]);
        Category::create([
            'name' => 'Sport',
        ]);

        User::create([
            'name'=> 'admin',
            'email'=>'admin@gmail.com',
            'password'=>'admin123'
        ]);
        $this->call([
            ProductSeeder::class,
        ]);
    }
}

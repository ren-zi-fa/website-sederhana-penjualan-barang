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
            'name' => 'fashion',
        ]);
        Category::create([
            'name' => 'pakaian',
        ]);
        Category::create([
            'name' => 'kendaraan',
        ]);
        Category::create([
            'name' => 'peralatan',
        ]);

        User::create([
            'name'=> 'admin',
            'email'=>'admin@gmail.com',
            'password'=>'admin123'
        ]);
       
    }
}

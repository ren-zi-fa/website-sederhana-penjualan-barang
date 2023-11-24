<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
        $admin->assignRole('admin');
        $penjual = User::create([
            'name' => 'penjual',
            'email' => 'penjual@gmail.com',
            'password' => bcrypt('penjual123')
        ]);
        $penjual->assignRole('penjual');
        $pembeli = User::create([
            'name' => 'pembeli',
            'email' => 'pembeli@gmail.com',
            'password' => bcrypt('pembeli123')
        ]);
        $pembeli->assignRole('pembeli');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-product']);
        Permission::create(['name' => 'hapus-product']);
        Permission::create(['name' => 'edit-product']);
        Permission::create(['name' => 'lihat-product']);

        Permission::create(['name' => 'beli-product']);
  


        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'edit-user']);


       

        Role::create(['name' => 'penjual']);

        Role::create(['name' => 'admin']);

        Role::create(['name' => 'pembeli']);

        $rolePembeli = Role::findByName('pembeli');
        $rolePembeli->givePermissionTo('beli-product');

        $rolePenjual = Role::findByName('penjual');
        $rolePenjual->givePermissionTo('tambah-product');
        $rolePenjual->givePermissionTo('hapus-product');
        $rolePenjual->givePermissionTo('edit-product');
 

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-product');
        $roleAdmin->givePermissionTo('edit-product');
        $roleAdmin->givePermissionTo('hapus-product');
     
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('hapus-user');

    }
}

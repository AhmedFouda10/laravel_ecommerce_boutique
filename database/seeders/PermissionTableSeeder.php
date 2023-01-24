<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'dashboard',
            'departments',
            'category',
            'list category',
            'add category',
            'brand',
            'list brand',
            'add brand',
            'product',
            'list product',
            'add product',
            'create category',
            'edit category',
            'delete category',
            'create brand',
            'edit brand',
            'delete brand',
            'create product',
            'edit create',
            'delete product',
            'list user',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-create'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Permission::create([
            'name' => 'admin.productos.create'
        ]);
        //2
        Permission::create([
            'name' => 'admin.productos.index'
        ]);
        //3
        Permission::create([
            'name' => 'admin.productos.edit'
        ]);
        //4
        Permission::create([
            'name' => 'admin.productos.destroy'
        ]);
        //5
        Permission::create([
            'name' => 'admin.home'
        ]);
        //6
        Permission::create([
            'name' => 'admin.roles.index'
        ]);
        //7
        Permission::create([
            'name' => 'admin.roles.create'
        ]);
        //8
        Permission::create([
            'name' => 'admin.roles.edit'
        ]);
        //9
        Permission::create([
            'name' => 'admin.roles.estroy'
        ]);
        //10
        //12
        Permission::create([
            'name' => 'admin.facturas.index'
        ]);
        //13
        Permission::create([
            'name' => 'admin.facturas.show'
        ]);
        //14
        Permission::create([
            'name' => 'admin.users.index'
        ]);
        //15
        Permission::create([
            'name' => 'admin.users.edit'
        ]);
    }
}

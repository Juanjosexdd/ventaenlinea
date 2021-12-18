<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::deleteDirectory('productos');
        Storage::makeDirectory('productos');
        
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ImpuestoSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(FacturaSeeder::class);

    }
}

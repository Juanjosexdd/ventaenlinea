<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Producto;
use Illuminate\Database\Seeder;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $productos = Producto::factory(5)->create();

		foreach ($productos as $producto) {
			Image::factory(1)->create([
                'imageable_id' => $producto->id,
                'imageable_type' => 'App\Models\Producto'
            ]);
	
		}
		

    }
}

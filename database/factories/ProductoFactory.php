<?php

namespace Database\Factories;

use App\Models\Impuesto;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'precio_venta' => $this->faker->randomElement([20, 100]),
            'estatus' => $this->faker->randomElement([1]),
            'impuesto_id' => $this->faker->randomElement([1]),
        ];
    }
}

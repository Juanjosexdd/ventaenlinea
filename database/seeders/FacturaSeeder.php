<?php

namespace Database\Seeders;

use App\Models\DetalleFactura;
use App\Models\Factura;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factura::create([
            'user_id' => 3,
            'num_venta' => '2526',
            'subtotal' => '748.13',
            'totalimpuesto' => '39.37',
            'total' => '787.50',
            'estatus' => 1,
            
        ]);
        DetalleFactura::create([
            'factura_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);
        
        DetalleFactura::create([
            'factura_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);
        
        
        DetalleFactura::create([
            'factura_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);
        
        
        DetalleFactura::create([
            'factura_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);
        
        
        DetalleFactura::create([
            'factura_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);


        Factura::create([
            'user_id' => 3,
            'num_venta' => '2527',
            'subtotal' => '748.13',
            'totalimpuesto' => '39.37',
            'total' => '787.50',
            'estatus' => 1,
            
        ]);
        DetalleFactura::create([
            'factura_id' => 2,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);
        
        DetalleFactura::create([
            'factura_id' => 2,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);
        
        
        DetalleFactura::create([
            'factura_id' => 2,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);
        
        
        DetalleFactura::create([
            'factura_id' => 2,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);
        
        
        DetalleFactura::create([
            'factura_id' => 2,
            'producto_id' => 1,
            'cantidad' => 1,
            'precio' => '150',
            'descuento' => 0,
            
        ]);

    }
}

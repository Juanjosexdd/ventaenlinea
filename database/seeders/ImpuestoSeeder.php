<?php

namespace Database\Seeders;

use App\Models\Impuesto;
use Illuminate\Database\Seeder;

class ImpuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Impuesto::create([
    		'nombre' => 'Impuesto 5 %',
	    	'impuesto' => '5',

    	]);
        Impuesto::create([
    		'nombre' => 'Impuesto 15 %',
	    	'impuesto' => '15',

    	]);
        Impuesto::create([
    		'nombre' => 'Impuesto 5 %',
	    	'impuesto' => '5',

    	]);
        Impuesto::create([
    		'nombre' => 'Impuesto 12 %',
	    	'impuesto' => '12',

    	]);
        Impuesto::create([
    		'nombre' => 'Impuesto 8 %',
	    	'impuesto' => '8',

    	]);
        Impuesto::create([
    		'nombre' => 'Impuesto 12 %',
	    	'impuesto' => '12',

    	]);
    }
}

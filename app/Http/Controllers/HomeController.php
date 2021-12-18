<?php

namespace App\Http\Controllers;

use App\Models\DetalleFactura;
use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __invoke()
    {
        $productos = Producto::where('estatus', '1')->latest('id')->get()->take(8);
        
        $factura = new Factura();
        // $productos = Producto::join('impuestos', 'productos.impuesto_id','=','impuestos.id')
        //     ->select(
        //         'impuestos.impuesto as impuesto',
        //         'productos.nombre as producto',
        //         'detalle_factura.cantidad as cantidad',
        //         'detalle_factura.precio as precio',
        //     )->get();
        
        return view('welcome',compact('productos','factura') );
    }

    public function store(Request $request)
    {

        try {
            DB::beginTransaction();

            $factura = new Factura();

            $factura->proveedor_id = $request->get('proveedor_id');
            $factura->correlativo = $request->get('correlativo');
            $factura->fecha_original = $request->get('fecha_original');
            $factura->observacion = $request->get('observacion');
            $factura->user_id = auth()->user()->id;
            $factura->save();


            $producto_id = $request->get('producto_id');
            $marca = $request->get('marca');
            $ubicacion = $request->get('ubicacion');
            $almacen_id = $request->get('almacen_id');
            $cantidad = $request->get('cantidad');
            $observacionp = $request->get('observacionp');
            $cont = 0;

            while ($cont < count($producto_id)) {
                $detalle = new DetalleFactura();
                $detalle->factura_id = $factura->id;
                $detalle->producto_id = $producto_id[$cont];
                $detalle->almacen_id = $almacen_id[$cont];
                $detalle->ubicacion = $ubicacion[$cont];
                $detalle->observacionp = $observacionp[$cont];
                $detalle->cantidad = $cantidad[$cont];
                $detalle->save();

            
                $cont = $cont + 1;
            }


            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }


    return redirect()->route('admin.facturas.index')->with('success', 'Guardado con exito');
    }
}

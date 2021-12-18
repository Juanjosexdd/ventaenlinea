<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetalleFactura;
use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class FacturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.facturas.index')->only('index');
        $this->middleware('can:admin.facturas.show')->only('edit','update');
        $this->middleware('can:admin.facturas.estatufactura')->only('estatufactura');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::all();

        return view('admin.facturas.index', compact('facturas'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = Factura::find($id);


        $detalles = DetalleFactura::join('productos', 'detalle_factura.producto_id', '=', 'productos.id')
        ->join('impuestos', 'productos.impuesto_id','=','impuestos.id')
            ->select(
                'impuestos.impuesto as impuesto',
                'productos.nombre as producto',
                'detalle_factura.cantidad as cantidad',
                'detalle_factura.precio as precio',
            )->where('detalle_factura.factura_id', '=', $id)
            ->orderBy('detalle_factura.id', 'desc')->get();

        return view('admin.facturas.show', compact('factura','detalles'));

    }
    public function edit(Factura $user)
    {
        $roles = Role::all();
        return view('admin.facturas.edit', compact('user','roles'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.facturas.edit', $user)->with('success', 'Se ha asignado el rol con exito!');
    }

    public function estatufactura(Factura $factura)
    {
        if ($factura->estatus == "1") {
            $factura->estatus = '2';
            $factura->save();

            return redirect()->route('admin.facturas.index')->with('success', 'La factura se procesó con éxito!');
        }
    }


}

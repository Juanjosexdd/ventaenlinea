<?php

namespace App\Http\Controllers\Admin;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Impuesto;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.productos.index')->only('index');
        $this->middleware('can:admin.productos.create')->only('create', 'store');
        $this->middleware('can:admin.productos.edit')->only('edit', 'update');
        $this->middleware('can:admin.productos.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.productos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $impuestos  = Impuesto::get()->pluck('impuesto', 'id');
 
        return view('admin.productos.create', compact('impuestos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);
        $producto = Producto::create($request->all());
        
        return redirect()->route('admin.productos.index', $producto)->with('success', ' ¡Felicidades el producto se creo con éxito!');
    }

    public function show(Producto $producto)
    {
        // $tipodocumentos = Tipodocumento::pluck('abreviado', 'id');
        return view('admin.productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {

        $impuestos  = Impuesto::get()->pluck('impuesto', 'id');

        return view('admin.productos.edit', compact('producto', 'impuestos'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:productos,slug,$producto->id",
            'descripcion' => 'required'
        ]);

        $producto->update($request->all());

        return redirect()->route('admin.productos.edit', $producto)->with('success', ' ¡Felicidades el producto se actualizó con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('admin.productos.index')->with('success', 'El producto se eliminó con exito!');
    }

}

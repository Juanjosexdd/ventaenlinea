
@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>Ventas En Linea</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Numero de factura {{$factura->num_venta}}
        </div>

        <div class="card-body">
            <br>
                <div style="border: 1px solid #dee2e6" class="p-4 rounded-lg text-secondary">
                    <div class="row">
                        <div class="col-md-6">
                            Cliente : {{$factura->user->name}}
                            <br>
                            Email : {{$factura->user->email}}
                            
                        </div>
                        <div class="col-md-6">
                            <div class="float-right">
                               Venta Nro : {{$factura->num_venta}}
                               <br>
                               @if ($factura->estatus == 1)
                                <form class="procesar" action="{{ route('admin.facturas.estatufactura', $factura) }}" method="get">
                                    @csrf
                                    <button type="submit" class="badge badge-success btn-sm elevation-4">
                                        <i class="fas fa-check-circle"></i> Facturar
                                    </button>
                                </form>
                                    
                                @else
                                <button class="badge badge-seccondary btn-sm elevation-4" disabled>
                                    <i class="fas fa-check-circle"></i> Cobrado
                                </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
            <table class="table table-striped rounded-lg">
                <thead class="rounded-lg">
                    <tr class="text-secondary text-sm font-weight-bold">
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>% Imp</th>
                        <th>Total Imp</th>
                        <th>Sub-total</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalles as $detalle)
                        <tr class="text-secondary text-sm">
                            <td>{{ $detalle->producto }}</td>
                            <td>{{ $detalle->cantidad }}</td>
                            <td>{{ $detalle->precio }}</td>
                            <td>{{ $detalle->impuesto }}%</td>
                            <td>{{number_format(($detalle->cantidad*$detalle->precio)*$detalle->impuesto/100,2)}}</td>
                            <td>{{number_format($detalle->cantidad*$detalle->precio)}}</td>
                            <td>{{number_format($detalle->cantidad*$detalle->precio + $detalle->cantidad*$detalle->precio*$detalle->impuesto/100,2)}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <br>
                <div >
                    <div class="row  ">
                        <div class=" offset-8 col-md-4 p-4" style="border: 1px solid #dee2e6" class="p-4 rounded-lg text-secondary">
                            Sub-Total : {{$factura->subtotal}}
                            <br>
                            Total Imp : {{$factura->totalimpuesto}}
                            <br>
                            Total : {{$factura->total}}
                            
                        </div>
                    </div>
                </div>
                <br>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
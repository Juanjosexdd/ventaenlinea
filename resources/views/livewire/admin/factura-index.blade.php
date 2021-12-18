<div>
    <div class="card text-left elevation-4">
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100" placeholder="Escriba el numero de factura" type="text">
        </div>
        @if ($facturas->count())
            
        
        <div class="card-body">
          <table class="table table-striped">
              <thead>
                <tr>
                    <th>Factura Nr.</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                    <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($facturas as $factura)
                    <tr>
                        <td><a href="{{ route('admin.facturas.show' , $factura->id) }}">{{$factura->num_venta}}</a></td>
                        <td>{{$factura->user->name}}</td>
                        <td>{{$factura->user->email}}</td>
                        <td>{{$factura->totalimpuesto}}</td>
                        <td>{{$factura->total}}</td>
                        {{-- <td>{{$factura->email}}</td> --}}
                        <td>
                            @if ($factura->estatus == 1)
                            <form class="procesar" action="{{ route('admin.facturas.estatufactura', $factura) }}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm elevation-4">
                                    <i class="fas fa-check-circle"></i> Facturar
                                </button>
                            </form>
                                
                            @else
                            <button class="btn btn-seccondary btn-sm elevation-4" disabled>
                                <i class="fas fa-check-circle"></i> Cobrado
                            </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
      </div>

      <div class="card-footer">
          {{$facturas->links()}}
      </div>
      @else

      <div class="card-body text-center">
          <strong class="text-center">No hay registros...</strong>
      </div>

      @endif
    </div>
</div>

<div class="container">
    <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
        <div class="card-body" style="overflow-y: auto">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <input wire:model="search" type="email" class="form-control mr-2" placeholder="Buscar">
        
        <a href="{{ route('admin.productos.create') }}" class="btn bg-navy btn-sm px-2 elevation-4"><i
                class="fas fa-plus mt-2 px-3"></i></a>
       
    </div>

    <div class="card-body card-body table-responsive p-0">
        
        <div class="tab-content" id="custom-content-above-tabContent">
            <div class="tab-pane fade show active" id="almacenprincipal" role="tabpanel" aria-labelledby="almacenprincipal-tab">
                @if ($productos->count())
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Precio venta</td>
                                <td>Impuesto</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr class="text-secondary text-sm font-weight-bold">
                                    <td>{{ $producto->clacificacion->abreviado }}{{ $producto->id }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->unidad_medida }}</td>
                                    <td>
                                        @if ($producto->stock == 0)
                                            <span class="badge badge-danger">{{ $producto->stock }}</span>
                                        @else
                                            <span class="badge badge-success">{{ $producto->stock }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $producto->minimo }}</td>
                                    <td>{{ $producto->maximo }}</td>
                                    <td>
                                        @if ($producto->estatus == 1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-danger">Inactivo</span>
                                        @endif
                                    </td>
                                    <td width="4px">
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-default btn-sm"
                                                style="border-color: rgb(158, 157, 157)">
                                                
                                                    <form class="formulario-estatus"
                                                        action="{{ route('admin.productos.estatuproducto', $producto) }}"
                                                        method="get">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-default text-success border-0 btn-sm p-0">
                                                            <i class="fas fa-check-circle"></i>
                                                        </button>
                                                    </form>
                                            </a>
                                            <a class="btn btn-default btn-sm"
                                                style="border-color: rgb(158, 157, 157); border-top-left-radius: 0px; border-bottom-left-radius: 0px;"
                                                href=" {{ route('admin.productos.edit', $producto) }} "><i
                                                class="fas fa-edit text-blue"></i></a>
                                            
                                            <a type="button" class="btn btn-default btn-sm"
                                                style="border-color: rgb(158, 157, 157); border-top-left-radius: 0px; border-bottom-left-radius: 0px;">
                                                <form class="formulario-eliminar"
                                                    action="{{ route('admin.productos.destroy', $producto) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-default btn-sm border-0 p-0 text-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span class="py-2 px-4 float-right ">
                        {{ $productos->links() }}
                    </span>
                @else
                    <div class="px-6 py-4 text-center text-sm">
                        No existe ninguna coincidencia
                    </div>
                @endif
            </div>
            
            
        </div>

    </div>
    
</div>
</div>
</div>
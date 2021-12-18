@extends('adminlte::page')

@section('title', 'CREAR NUEVO PRODUCTO')

@section('content')
    @include('sweetalert::alert')

        <h3 class="text-white">Registrar un nuevo producto</h3>

        <div class="container">
            <div class="card elevation-4 col-md-12 col-sm-12 pt-6" style="border-radius: 0.95rem">
                <div class="card-body" style="overflow-y: auto">
                
                

        {!! Form::open(['route' => 'admin.productos.store']) !!}
        <a href=" {{ route('admin.productos.index') }} " class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4"><i
                class="fas fa-reply"></i> Volver</a>
        <p class="h3 text-blue">Producto</p>
        <hr>
        @include('admin.productos.partials.form')
        {!! Form::submit('Guardar producto', ['class' => 'btn bg-navy btn-block']) !!}
        {!! Form::close() !!}
    </div>
</div>
</div>
@stop

@section('footer')

@stop

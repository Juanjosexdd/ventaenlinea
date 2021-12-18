<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre :',['class' => 'text-blue ']) !!}    
            <div class="input-group mb-3">
                {{ Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('precio_venta', 'Precio : ',['class' => 'text-blue']) !!} <span class="text-danger">*</span>
            <div class="input-group mb-3">
                {!! Form::text('precio_venta', null, ['class' => 'form-control' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio de venta']) !!}
                {!! $errors->first('precio_venta', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        {!! Form::label('impuesto_id', 'impuesto : ', ['class' => 'text-blue']) !!}
        <div class="input-group">
        {!! Form::select('impuesto_id', $impuestos, null, ['class' => 'form-control select2', 'placeholder' => '']) !!}
        </div>
    </div>
</div>

@section('css')
    {{-- <link rel="stylesheet" href="{{asset('vendor/select2/css/bootstrap-select.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2-bootstrap4.min.css') }}">
@stop

@section('js')

@stop
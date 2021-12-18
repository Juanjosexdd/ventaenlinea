<div class="form-group">
    {!! Form::label('name', 'Nombre : ',['class' => 'text-primary']) !!}
    {!! Form::text('name', null, ['class' => 'form-control'. ($errors->has('name') ? ' is-invalid' : ''), 'placeholder'=> 'Escriba un nombre']) !!}
    {!! $errors->first('name', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}

</div>

<strong class="text-primary">Permisos :</strong>
<br>

@foreach ($permissions as $permission)
<div>
    <label>
        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
        {{$permission->name}}
    </label>
</div>
@endforeach

@error('permissions')
    <small class="text-danger text-center">
        <strong class="">{{$message}}</strong>
    </small>
    <br>
@enderror
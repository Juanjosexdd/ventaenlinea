@extends('adminlte::page')

@section('title', 'Galepso')

@section('content_header')
    <h1>Lista de facturas</h1>
@stop

@section('content')
@include('sweetalert::alert')
    @livewire('admin.factura-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
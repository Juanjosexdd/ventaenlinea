<?php

use App\Http\Controllers\Admin\FacturaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::resource('roles', RoleController::class)->names('roles');
Route::resource('facturas', FacturaController::class)->names('facturas');
Route::resource('users', UserController::class)->only(['index','edit','update'])->names('users');
Route::resource('productos', ProductoController::class)->names('productos');


Route::get('estatufactura/{factura}', [FacturaController::class, 'estatufactura'])->name('facturas.estatufactura');
Route::get('estatuproducto/{producto}', [ProductoController::class, 'estatuproducto'])->name('productos.estatuproducto');

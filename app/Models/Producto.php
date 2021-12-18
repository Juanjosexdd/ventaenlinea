<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    //relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    function detalle_facturas()
    {
        return $this->hasMany(DetalleFactura::class);
    }

    public function impuesto()
    {
        return $this->belongsTo(Impuesto::class);
    }

    
}
